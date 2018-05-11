<?php

  /**
  * array to hold the data to be written in new file
  */
  $user_data_array = array();

  /**
  * function to read file
  * @param string $filename
  * @return boolean
  */
  function readDataFile($filename)
  {
    $return_value = false;

    if ((is_string($filename))) {
      echo "string";


      $return_value = true;

      try {
        $myfile = fopen($filename, "r");
        if (!$myfile) {
          $return_value = false;
          throw new Exception('File open failed.');
        }

        echo 'file opened successfully' . PHP_EOL;
        global $user_data_array;

        while (!feof($myfile)) {
          $user_data = explode(",", fgets($myfile));
          $user_data = str_replace(array("\n", "\r"), '', $user_data);

          if (validatesStringData($user_data)) {
            echo 'match found. Pushing it into result set' . PHP_EOL;
            $temp = $user_data[1];
            $user_data[1] = $user_data[2];
            $user_data[2] = $temp;
            $temp = $user_data[3];
            $user_data[3] = $user_data[4];
            $user_data[4] = $temp;
            array_push($user_data, PHP_EOL);
            array_push($user_data_array, implode(", ", $user_data));
          }
        }
        fclose($myfile);
      } catch (Exception $e) {
          echo 'Message: ' .$e->getMessage();
      }
    }
    return $return_value;

  } // end function readDataFile


  /**
  * function to validate the uesr data
  * @param string $data
  * @return boolean
  */
  function validatesStringData($user_data)
  {
      $return_value = false;
      if (validateEmailAddress(@$user_data[1]) && validatePhoneNumber(@$user_data[4])) {
          $return_value = true;
      }
      return $return_value;
  }

  /**
  * function to validate email address
  * @param string $email
  * @return boolean
  */
  function validateEmailAddress($email)
  {
      return preg_match('/[a-z*.]+@coeus-solutions.de/', $email);
  }

  /**
  * function to validate phone number address
  * @param integer $phone_number
  * @return boolean
  */
  function validatePhoneNumber($phone_number)
  {
      return preg_match('/03(00|21|33)([0-9]{7}$)/', $phone_number);
  }

  /**
  * function to validate phone number address
  */
  function writeUserDataToFile()
  {
      global $user_data_array;
      $myfile = fopen("result.txt", "w") or die("Unable to open file!");
      $txt = implode("", $user_data_array);
      fwrite($myfile, $txt);
      echo 'wtiting results to output file "result.txt"' . PHP_EOL;
      fclose($myfile);
  }

  if (readDataFile('data.csv')) {
    writeUserDataToFile();
  }
