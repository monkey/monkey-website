<?php
    class DboDummyDb extends DboSource {
                 function connect()  {
                          $this->connected = true;
                          return $this->connected;
                  }
            }

