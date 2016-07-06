        <?php

$mailSent = false;

// Assume the input contains nothing suspect
$suspect = false;

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$comments = $_POST['comments'];

$message = $fname . ' ' . $lname . ' whose email is ' . $email . " had these comments: \n" . $comments . '.';

$mailSent = mail($to, $subject, $message, $headers);



if (!$mailSent) {
    $errors['mailfail'] = true;
    header('Location: thanks.php');
        exit;
}

if ($mailSent) {
        header('Location: thanks.php');
        exit;
    }

/*
// Regular expression to search for suspect phrases
$pattern = '/Content-type:|Bcc:|Cc:/i';

// Recursive function that checks for suspect phrases
// Third argument is passed by reference
function isSuspect($value, $pattern, &$suspect) {
    if (is_array($value)) {
        foreach ($value as $item) {
            isSuspect($item, $pattern, $suspect);
        }
    } else {
        if (preg_match($pattern, $value)) {
            $suspect = true;
        }
    }
}

// Check the $_POST array for suspect phrases
isSuspect($_POST, $pattern, $suspect);

// Process the form only if no suspect phrases are found
if (!$suspect) :
    // Check that required fields have been filled in,
    // and reassign expected elements to simple variables
    foreach ($_POST as $key => $value) {
        $value = is_array($value) ? $value : trim($value);
        if (empty($value) && in_array($key, $required)) {
            $missing[] = $key;
            $$key = '';
        } elseif (in_array($key, $expected)) {
            $$key = $value;
        }
    }
    
    // Validate user's email
    if (!$missing && !empty($email)) :
        $validemail = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        if ($validemail) {
            $headers[] = "Reply-to: $validemail";
        } else {
            $errors['email'] = true;
        }
    endif;
    
    // If no errors, create headers and message body
    if (!$errors && !$missing) :
        $headers = implode("\r\n", $headers);
        
        // Initialize the message
        $message = '';
        foreach ($expected as $field) :
            if (isset($$field) && !empty($$field)) {
                $val = $$field;
            } else {
                $val = 'Not selected';
            }
            
            // If an array, expand to a comma-separated string
            if (is_array($val)) {
                $val = implode(', ', $val);
            }
            
            // Replace underscores in the field names with spaces
            $field = str_replace('_', ' ', $field);
            $message .= ucfirst($field) . ": $val\r\n\r\n";
        endforeach;
        $message = wordwrap($message, 100);
        $mailSent = mail($to, $subject, $message, $headers, $authorized);
        if (!$mailSent) {
            $errors['mailfail'] = true;
        }
    endif;
endif;
*/