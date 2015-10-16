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

Form::macro('btn_return', function($url){
	$value = trans('forms.return');
	return "<a href='{$url}' class='btn btn-default'><i class='glyphicon glyphicon-triangle-left'></i> {$value}</a>";
});

Form::macro('btn_active', function(){
	$value = trans('forms.active');
	return "<button class='btn btn-xs btn-success btn-block'><i class='glyphicon glyphicon-ok'></i> {$value}</button>";
});

Form::macro('btn_inactive', function(){
	$value = trans('forms.inactive');
	return "<button class='btn btn-xs btn-danger btn-block'><i class='glyphicon glyphicon-remove'></i> {$value}</button>";
});

Form::macro('bootstrap_switch', function($name, $value){
	return Form::checkbox($name, 1, (bool)$value, ['class'=>'bootstrap-switch', 'data-on-color'=>'primary', 'data-off-color'=>'default', 'data-size'=>'small', 'data-on-text'=>'ON', 'data-off-text'=>'OFF' ] );
});



