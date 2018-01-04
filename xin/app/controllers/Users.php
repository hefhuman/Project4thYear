<?php
class Users extends Controller{

  public function __construct(){
    $this->userModel = $this->model('User');
  }

  public function login(){
    //Check for post
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      //Sanitize post data
      $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

      //Init data
      $data = [
        'username' => trim($_POST['username']),
        'password' => trim($_POST['password']),
        'username_err' => '',
        'password_err' => ''
      ];

      //Validating username
      if(empty($data['username'])){
        $data['username_err'] = 'Please enter username';
      }

      //Validating password
      if(empty($data['password'])){
        $data['password_err'] = 'Please enter password';
      } elseif(strlen($data['password']) < 6){
        $data['password_err'] = 'Password must be atleast 6 characters';
      }

      //Make sure that errors are empty
      if(empty($data['username_err']) && empty($data['password_err'])){

        $loggedInUser = $this->userModel->login($data['username'], $data['password']);

        if($loggedInUser){
          //Create Session
          $this->createUserSession($loggedInUser);
        } else {
          $data['password_err'] = 'Password Incorrect';
          $data['username_err'] = 'Username Incorrect';

          $this->view('users/login', $data);
        }
      } else {
        //Load view with error
        $this->view('users/login', $data);
      }
    } else {
      //Load form
      //Init data
      $data = [
        'username' => '',
        'password' => '',
        'username_err' => '',
        'password_err' => ''
      ];
      //Load view
      $this->view('users/login',$data);
    }
}
public function createUserSession($user){
  $_SESSION['user_id'] =  $user->id;
  $_SESSION['user_name'] =  $user->username;
  redirect('mis/index');
}

public function logout(){
  unset($_SESSION['user_id']);
  unset($_SESSION['user_name']);
  session_destroy();
  redirect('users/login');
}
}
 ?>
