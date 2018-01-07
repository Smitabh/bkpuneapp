<?php

use RainLab\User\Models\Settings as UserSettings;
use Iocare\BkpuneWebservice\Models\Type;
use Iocare\BkpuneWebservice\Models\Center;
use Iocare\BkpuneWebservice\Models\Article;

Route::get('/authtest', array('before' => 'auth.basic', function()
{
      return Response::json(array('result' => 'success', 'reason' => 'Logged In' ), 200);
}));

Route::get('/authtest', array('before' => 'auth.basic', function()
{
      return Response::json(array('result' => 'success', 'reason' => 'Logged In' ), 200);
}));

Route::get('/api', array('before' => 'auth.basic', function()
{
      return Auth::getUser();
}));

Route::get('/article', array('before' => 'auth.basic', function()
{
  if(!isset($_GET['id']))
    return Response::json(array('result' => 'error', 'reason' => 'Id not specified' ), 200);
  try {
    $data = Article::where('id','=',$_GET['id'])->get(['type','article_id'])[0];
  } catch (Exception $ex) {
    return Response::json(array('result' => 'error', 'reason' => 'Invalid Article' ), 200);
  }
  if($data != null)
    return json_encode($data);
}));

Route::get('/center', array('before' => 'auth.basic', function()
{
  if(!isset($_GET['id']))
    return Response::json(array('result' => 'error', 'reason' => 'Id not specified' ), 200);
  try {
    $data = Center::where('id','=',$_GET['id'])->get()[0];
  } catch (Exception $ex) {
    return Response::json(array('result' => 'error', 'reason' => 'Invalid Cener' ), 200);
  }
  if($data != null)
    return json_encode($data);
}));

Route::get('/type', array('before' => 'auth.basic', function()
{
  if(!isset($_GET['id']))
    return Response::json(array('result' => 'error', 'reason' => 'Id not specified' ), 200);
  try {
    $data = Type::where('id','=',$_GET['id'])->get()[0];
    $data['type'] = Type::where('id','=',$data -> original['ccenter_id'])->get()[0]['name'];
  } catch (Exception $ex) {
    return Response::json(array('result' => 'error', 'reason' => 'Invalid Prop' ), 200);
  }
  if($data != null)
    return json_encode($data);
}));

Route::filter('auth.basic', function()
{
    try {
    if (!Auth::check())
      {
    Auth::authenticate([
            'login' => $_GET['PHP_AUTH_USER'],
            'password' => $_GET['PHP_AUTH_PW']
        ], true);
      }
  } catch(Exception $ex) {
    return Response::json(array('result' => 'error', 'reason' => $ex->getMessage() ), 200);
  }
});