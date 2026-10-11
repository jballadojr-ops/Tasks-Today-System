<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class Home extends BaseController
{
    public function index(): string
    {
        $taskModel = new TaskModel();

        return view('home', [
            'tasks' => $taskModel->getTodaysTasks()
        ]);
    }

    public function tasks(): string
    {
        $taskModel = new TaskModel();

        return view('tasks', [
            'tasks' => $taskModel->getAllTasks()
        ]);
    }

    public function profile(): string
    {
        $userModel = new UserModel();

        return view('profile', [
            'user' => $userModel->first()
        ]);
    }

    public function about(): string
    {
        return view('about');
    }
}