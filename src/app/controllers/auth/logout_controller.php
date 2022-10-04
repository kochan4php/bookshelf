<?php

function logout()
{
  session_regenerate_id();
  session_reset();
  session_unset();
  $_SESSION = [];
}
