<?php

  /**
  * function to read file
  * @param string $filename
  * @return boolean
  */
  function readDataFile($filename)
  {
    $return_value = false;
    try {
      $file = fopen($filename, "r");
      $output_file = fopen("result.txt", "w");
      if (!$file || !$output_file) {
        $return_value = false;
        throw new Exception('file failedto  open.');
      }
      echo 'file opened successfully' . PHP_EOL;
      while (!feof($file)) {
        $user_data = explode(",", fgets($file));
        $user_data = str_replace(array("\n", "\r"), '', $user_data);

        if (validatesStringData($user_data)) {
          $user_data = swapValues($user_data, 1, 2);
          $user_data = swapValues($user_data, 3, 4);
          array_push($user_data, PHP_EOL);
          writeUserDataToFile($user_data,$output_file);
        }
        $return_value = true;
      }
    } catch (Exception $e) {
      echo 'Message: ' .$e->getMessage();
    } finally {
      fclose($file);
      fclose($output_file);
    }
    return $return_value;
  } // end function readDataFile

  /**
  * function to validate the uesr data
  * @param string $user_data
  * @return boolean
  */
  function validatesStringData($user_data)
  {
      $return_value = false;
      if (validateEmailAddress($user_data[1]) && validatePhoneNumber($user_data[4])) {
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
  * function to validate phone number
  * @param integer $phone_number
  * @return boolean
  */
  function validatePhoneNumber($phone_number)
  {
      return preg_match('/03(00|21|33)([0-9]{7}$)/', $phone_number);
  }

  /**
  * function to write result data to "result.txt" file
  */
  function writeUserDataToFile($user_data,$output_file)
  {
    fwrite($output_file, implode(", ", $user_data));
    echo 'wtiting results to output file "result.txt"' . PHP_EOL;
  }

  /**
  * function to swap 2 values
  * @param integer $index1
  * @param integer $index2
  */
  function swapValues($user_data, $index1, $index2)
  {
    $temp = $user_data[$index1];
    $user_data[$index1] = $user_data[$index2];
    $user_data[$index2] = $temp;
    return $user_data;
  }

  readDataFile('data.csv');
