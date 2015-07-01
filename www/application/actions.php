<?php 
function home_page(){
    echo "Вы находитесь на главной странице";
}
function users_page(){
    echo "Вы находитесь на странице списка пользователей ";
}
function new_user(){
    echo "Вы находитесь на странице создания профиля пользователя";
}
function user_page($id){
    echo "Вы находитесь на странице пользователя $id";
}
