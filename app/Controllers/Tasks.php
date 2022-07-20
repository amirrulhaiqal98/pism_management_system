<?php

namespace App\Controllers;

use LDAP\Result;
use PHPUnit\Framework\Error\Warning;

class Tasks extends BaseController
{
	public function index()
	{
		$model= new \App\Models\TaskModel;
		$data = $model->findAll();
		
		//Paparkan file index bagi task
		//hantar data db dari table tasks
		return view("Tasks/index" , ['tasks' => $data]);
	}

	public function show($id)
	{
		$model = new \App\Models\TaskModel;
		$task = $model->find($id);

		return view('Tasks/show', [
			'task' => $task
		]);
		
	}

	public function new()
	{
		return view('Tasks/new');
	}

	public function create()
	{
		$model = new \App\Models\TaskModel;

		$result = $model->insert([
			'description' => $this->request->getPost("description")
		]);

		if($result === false) {

			// Go back to the previous page
			return redirect()->back()
							 ->with('errors', $model->errors())
							 ->with('warning', 'Invalid Data')
							 ->withInput(); 

		}else{
			return redirect()->to("show/$result")
							 ->with('info','Task Created Succesfully');
		} 
		
	}

	public function edit($id){
		$model = new \App\Models\TaskModel;
		$task = $model->find($id);

		return view('Tasks/edit', [
			'task' => $task
		]);
	}

	public function update($id){
		
		$model = new \App\Models\TaskModel;

		$result = $model->update($id, [
			'description' => $this->request->getPost('description')
		]);

		if($result){

			return redirect()->to("tasks/show/$id")
						 ->with('info','TasK updated successfully');
		} else{
			return redirect()->back()
							 ->with('errors', $model->errors())
							 ->with('warning', 'Invalid data')
							 ->withInput(); 
		}
		
	}
}
