<?php

Router::get('^\/$','home_page');
Router::get('^\/home$','home_page');
Router::get('^\/users$','users_page');
Router::get('^\/users\/add$','new_user');
Router::get('^\/users\/(\d+)$','user_page');
Router::get('^\/users\/(\d+)\/(\d+)$','_user_page');
