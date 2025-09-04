<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Quiz;
use App\Models\Mcq;

class AdminController extends Controller
{
    function login(Request $request)
    {

        $validation = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        $admin = Admin::where(
            [
                ['name', '=', $request->name],
                ['password', '=', $request->password]
            ]
        )->first();

        if (!$admin)
        {
            $validation = $request->validate(
                ["user" => "required"],
                ["user.required" => "user doesn't exist"]
            );
        }

        Session::put('admin', $admin);

        return redirect('dashboard');
    }


    function dashboard()
    {
        $admin = Session::get('admin');

        if ($admin)
        {
            return view('admin', ["name" => $admin->name]);
        }

        else
        {
            return redirect('admin-login');
        }
    }

    function categories()
    {

        $categories = Category::get();

        $admin = Session::get('admin');

        if ($admin)
        {
            return view('categories', ["name" => $admin->name, "categories" => $categories]);
        }
        
        else
        {
            return redirect('admin-login');
        }
    }


    function logout()
    {
        Session::forget('admin');

        return redirect('admin-login');
    }

    function addCategory(Request $request)
    {

        $validation = $request->validate([
            "category" => "required | min:3 | unique:categories,name"
        ]);

        $admin = Session::get('admin');

        $category = new Category();
        $category->name = $request->category;
        $category->creator = $admin->name;

        if ($category->save())
        {
            Session::flash('category', "Category " . $request->category . " Added");
        }

        return redirect("admin-categories");
    }

    function deleteCategory($id)
    {
        $isDeleted = Category::find($id)->delete();

        if ($isDeleted)
        {
            Session::flash('deleteCategory', "this category is deleted");

            return redirect("admin-categories");
        }
    }

    function addQuiz()
    {

        $admin = Session::get('admin');
        $categories = Category::get();

        $totalMCQs =0;

        if ($admin)
        {

            $quizName =  request('quiz');
            $categoryId =  request('category_id');

            if ($quizName && $categoryId && !Session::has('quizDetails')) {
                $quiz = new Quiz();
                $quiz->name = $quizName;
                $quiz->category_id = $categoryId;

                if ($quiz->save()) {
                    Session::put('quizDetails', $quiz);
                }
            }
            else
            {
                $quiz = Session::get('quizDetails');
                
                if ($quiz)
                {
                    $totalMCQs = Mcq::where('quiz_id',$quiz->id)->count();
                }
            }
            return view('add-quiz', ["name" => $admin->name, "categories" => $categories, "totalMCQs" => $totalMCQs]);
        }

        else
        {
            return redirect('admin-login');
        }
    }

    function addMCQs(Request $request)
    {
        $request->validate([
            "question" => "required | min:5",
            "a" => "required",
            "b" => "required",
            "c" => "required",
            "d" => "required",
            "correct_answer" => "required"
        ]);

        $quiz = Session::get('quizDetails');
        $admin = Session::get('admin');

        $mcq = new Mcq();

        $mcq->question = $request->question;
        $mcq->a = $request->a;
        $mcq->b = $request->b;
        $mcq->c = $request->c;
        $mcq->d = $request->d;
        $mcq->correct_answer = $request->correct_answer;

        $mcq->admin_id = $admin->id;
        $mcq->quiz_id = $quiz->id;
        $mcq->category_id = $quiz->category_id;

        $memory = $mcq->save();

        if ($memory)
        {
            if ($request->submit == "add-more")
            {
                return redirect(url()->previous());
            }
            else
            {
                Session::forget('quizDetails');
                return redirect("/add-quiz");
            }
        }
    }

    function endQuiz()
    {
        Session::forget('quizDetails');
        return redirect("/admin-categories");
    }

    function showQuiz ()
    {
        
    }
}
