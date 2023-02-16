<?php

$user_role = "admin";

if($user_role == "admin") {
  echo "User is an admin";
}
elseif($user_role == "moderator") {
  echo "User is a moderator";
}
else {
  echo "User is a regular user";
}


?>