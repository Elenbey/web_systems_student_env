<?php

Router::get('^\/$','home_page');
Router::get('^\/home$','home_page');
Router::get('^\/users$','users_page');
Router::get('^\/users\/add$','new_user');