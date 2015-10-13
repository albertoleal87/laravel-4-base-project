<?php

Form::macro('btn_create', function($url, $value){
	return "<a href='{$url}' class='btn btn-success'><i class='glyphicon glyphicon-plus'></i> {$value}</a>";
});

Form::macro('btn_show', function($url){
	$title = trans('forms.show_register');
	return "<a href='{$url}' class='btn btn-xs btn-info' title='{$title}'><i class='glyphicon glyphicon-search'></i></a>";
});

Form::macro('btn_edit', function($url){
	$title = trans('forms.edit_register');
	return "<a href='{$url}' class='btn btn-xs btn-primary' title='{$title}'><i class='glyphicon glyphicon-pencil'></i></a>";
});

Form::macro('btn_delete', function($url){
	$title = trans('forms.delete_register');
	return "<a class='btn btn-xs btn-danger confirm-delete' title='{$title}'><i class='glyphicon glyphicon-trash'></i></a>";
});

Form::macro('btn_save', function(){
	$value = trans('forms.save');
	return "<button type='submit' class='btn btn-success'><i class='glyphicon glyphicon-floppy-disk'></i> {$value}</button>";
});

Form::macro('btn_cancel', function($url){
	$value = trans('forms.cancel');
	return "<a href='{$url}' class='btn btn-danger'><i class='glyphicon glyphicon-remove'></i> {$value}</a>";
});






