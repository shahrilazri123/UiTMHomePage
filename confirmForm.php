<?php
// Start or resume the session
session_start();

// Check if there are session variables with form data
$formData = isset($_SESSION['form_data']) ? $_SESSION['form_data'] : [];

// Clear the session data related to the form
unset($_SESSION['form_data']);

// Assuming $_POST['acknowledge_date'] contains the date value
$_SESSION['form_data']['acknowledge_date'] = $_POST['acknowledge_date'];

// After successful form processing
header("Location: uitmPage.php?success=true");
exit;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation Form</title>
    <link rel="stylesheet" type="text/css" href="hiasForm.css">
</head>
<body>

<div class="header">
    <div class="left-section">
        <div>
        <img src="logoUITM.jpg" alt="UiTM Logo">
        </div>
        <div>
            <div><b>Universiti Teknologi MARA</b></div>
            <div><b>Application For Administrative Positions</b></div>
        </div>
    </div>

    <form action="uitmPage.php" method="post" enctype="multipart/form-data">
    <div class="right-section">
    <div>Please insert your passport image:</div>
    <br>
    <?php echo isset($_POST['passport_image']) ? $_POST['passport_image'] : ''; ?><br>
</div>
</div>

<!-- Display the selected job position with its name using if-else statement -->
Requested Job Position: <?php echo isset($_POST['position']) ? $_POST['position'] : ''; ?><span>    </span>
<?php

if ($_POST['position'] === 'C29') {
    echo '- Assistant Science Officer';
} elseif ($_POST['position'] === 'N19') {
    echo '- Administrative Assistant (Clerical/Operational)';
} elseif ($_POST['position'] === 'S19') {
    echo '- Assistant Librarian';
} elseif ($_POST['position'] === 'W19') {
    echo '- Administrative Assistant (Finance)';
} else {
    echo '- Public Assistant';
}
?>

<br><br>

<div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Form Data</title>
    <link rel="stylesheet" type="text/css" href="hiasForm.css">
</head>
<body>

<div class="form-section">
    <div class="purple-box">A. Self Description:</div><br>

        <!-- Display submitted data for confirmation -->
        1. Full Name: 
            <?php if (isset($_POST['edit_mode']) && $_POST['edit_mode'] === 'yes') : ?>
                <input type="text" name="full_name" value="<?php echo isset($_POST['full_name']) ? $_POST['full_name'] : ''; ?>" />
            <?php else : ?>
                <?php echo isset($_POST['full_name']) ? $_POST['full_name'] : ''; ?>
            <?php endif; ?>
            <br>
        2. Old Identification Card/ Passport Number: 
            <?php echo isset($_POST['old_ic_number']) && !empty($_POST['old_ic_number']) ? $_POST['old_ic_number'] : '-'; ?>
           <br>
        2a. New Identification Card Number: 
            <?php echo isset($_POST['new_ic_number']) && !empty($_POST['new_ic_number']) ? $_POST['new_ic_number'] : '-'; ?>
            <br>
        3. Citizenship: <?php echo isset($_POST['citizenship']) ? $_POST['citizenship'] : ''; ?>
            <?php

            if ($_POST['citizenship'] === 'M') {
                echo '- Malaysian';
            } else {
                echo '- Non-Malaysian';
            }
            ?><br>

        4. Race: <?php echo isset($_POST['race']) ? $_POST['race'] : ''; ?><br>
        5. Religion: <?php echo isset($_POST['religion']) ? $_POST['religion'] : ''; ?><br>
        6. Mailing Address: <?php echo isset($_POST['mailing_address']) ? $_POST['mailing_address'] : ''; ?><br>
        7. Home Phone: 
            <?php echo isset($_POST['home_phone']) && !empty($_POST['home_phone']) ? $_POST['home_phone'] : '-'; ?>
            <br>
           Mobile Phone: <?php echo isset($_POST['mobile_phone']) ? $_POST['mobile_phone'] : ''; ?><br>
           Office Phone: 
           <?php echo isset($_POST['office_phone']) && !empty($_POST['office_phone']) ? $_POST['office_phone'] : '-'; ?>
            <br>
        8. Birth Date: <?php echo isset($_POST['birth_day']) ? $_POST['birth_day'] : ''; ?>
           <?php echo isset($_POST['birth_month']) ? $_POST['birth_month'] : ''; ?>
           <?php echo isset($_POST['birth_year']) ? $_POST['birth_year'] : ''; ?><br>
           Hometown: <?php echo isset($_POST['hometown']) ? $_POST['hometown'] : ''; ?><br>
        9. Marital Status: <?php echo isset($_POST['marital_status']) ? $_POST['marital_status'] : ''; ?><br>
        10. Gender: <?php echo isset($_POST['gender']) ? $_POST['gender'] : ''; ?>

            <?php

                if ($_POST['gender'] === 'L') {
                    echo '- Male';
                } else {
                    echo '- Female';
                }
                ?><br>

        11. Wife/Husband Name: 
            <?php echo isset($_POST['spouse_name']) && !empty($_POST['spouse_name']) ? $_POST['spouse_name'] : '-'; ?>
            <br>
            Occupation: 
            <?php echo isset($_POST['occupation']) && !empty($_POST['occupation']) ? $_POST['occupation'] : '-'; ?>
            <br>
            Workplace Address: 
            <?php echo isset($_POST['workplace_address']) && !empty($_POST['workplace_address']) ? $_POST['workplace_address'] : '-'; ?>
            <br>

</div>

    <div class="form-section">
        <div class="purple-box">B. History of Academic Qualifications:</div><br>
        <!-- Display the filled data -->
        12. Evidence regarding academic qualifications at School, College, and / or University should be given in the space below.<br><br>
        <span style="margin-right: 28px;"></span><span class="reminder">REMINDER</span>  : Please include copies of Certificates, Diplomas and Degrees to prove all the statements given. <br>
        <span style="margin-right: 126px;"></span>Candidates are also required to send a complete Statement of Results or Transcript.<br><br>

        <table>
            <tr>
                <th>Qualification Name / Field</th>
                <th>Rank / Class / Honors / CGPA</th>
                <th>Malaysian Language Result</th>
                <th>Name of School / Institution of Higher Education</th>
                <th>Approval Date</th>
                <th>Statement of Result/Transcript</th>
            </tr>
            <!-- Row 1 -->
            <tr>
                <td>i. School Leaving Certificate (Highest Level)</td>
                <td>
                    <input type="text" name="school_rank[]" value="<?php echo isset($_POST['school_rank']) ? implode($_POST['school_rank']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                    <input type="text" name="school_malay_result[]" value="<?php echo isset($_POST['school_malay_result']) ? implode($_POST['school_malay_result']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                    <input type="text" name="school_name[]" value="<?php echo isset($_POST['school_name']) ? implode($_POST['school_name']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                    <input type="date" name="school_approve_date[]" value="<?php echo isset($_POST['school_approve_date']) ? implode($_POST['school_approve_date']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                    <?php
                    if (isset($_POST['school_transcript_documents']) && is_array($_POST['school_transcript_documents'])) {
                        foreach ($_POST['school_transcript_documents'] as $file) {
                            $encodedFileName = urlencode($file);
                            
                            echo $file;
                            }
                            
                        }
                    ?>
                </td>

            </tr>
            
            <!-- Row 2 -->
            <tr>
                <td>ii. SRP / PMR</td>
                <td>
                    <input type="text" name="srp_rank[]" value="<?php echo isset($_POST['srp_rank']) ? implode($_POST['srp_rank']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                    <input type="text" name="srp_malay_result[]" value="<?php echo isset($_POST['srp_malay_result']) ? implode($_POST['srp_malay_result']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                    <input type="text" name="srp_name[]" value="<?php echo isset($_POST['srp_name']) ? implode($_POST['srp_name']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                    <input type="date" name="srp_approve_date[]" value="<?php echo isset($_POST['srp_approve_date']) ? implode($_POST['srp_approve_date']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                <?php
                if (isset($_POST['srp_transcript_documents']) && is_array($_POST['srp_transcript_documents'])) {
                    foreach ($_POST['srp_transcript_documents'] as $file) {
                        $encodedFileName = urlencode($file);
                        echo $file;
                    }
                }
                ?>
                </td>
            </tr>
            <!-- Row 3 -->
            <tr>
                <td>iii. SPM / SPMV</td>
                <td>
                    <input type="text" name="spm_rank[]" value="<?php echo isset($_POST['spm_rank']) ? implode($_POST['spm_rank']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                    <input type="text" name="spm_malay_result[]" value="<?php echo isset($_POST['spm_malay_result']) ? implode($_POST['spm_malay_result']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                    <input type="text" name="spm_name[]" value="<?php echo isset($_POST['spm_name']) ? implode($_POST['spm_name']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                    <input type="date" name="spm_approve_date[]" value="<?php echo isset($_POST['spm_approve_date']) ? implode($_POST['spm_approve_date']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                <?php
                if (isset($_POST['spm_transcript_documents']) && is_array($_POST['spm_transcript_documents'])) {
                    foreach ($_POST['spm_transcript_documents'] as $file) {
                        $encodedFileName = urlencode($file);
                        echo $file;
                    }
                }
                ?>
                </td>
            </tr>
            <!-- Row 4 -->
            <tr>
                <td>iv. Polytechnic Certificate</td>
                <td>
                    <input type="text" name="poly_rank[]" value="<?php echo isset($_POST['poly_rank']) ? implode($_POST['poly_rank']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                    <input type="text" name="poly_malay_result[]" value="<?php echo isset($_POST['poly_malay_result']) ? implode($_POST['poly_malay_result']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                    <input type="text" name="poly_name[]" value="<?php echo isset($_POST['poly_name']) ? implode($_POST['poly_name']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                    <input type="date" name="poly_approve_date[]" value="<?php echo isset($_POST['poly_approve_date']) ? implode($_POST['poly_approve_date']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                <?php
                if (isset($_POST['poly_transcript_documents']) && is_array($_POST['poly_transcript_documents'])) {
                    foreach ($_POST['poly_transcript_documents'] as $file) {
                        $encodedFileName = urlencode($file);
                        echo $file;
                    }
                }
                ?>
                </td>
            </tr>
            <!-- Row 5 -->
            <tr>
                <td>v. STPM / STAM</td>
                <td>
                    <input type="text" name="stpm_rank[]" value="<?php echo isset($_POST['stpm_rank']) ? implode($_POST['stpm_rank']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                    <input type="text" name="stpm_malay_result[]" value="<?php echo isset($_POST['stpm_malay_result']) ? implode($_POST['stpm_malay_result']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                    <input type="text" name="stpm_name[]" value="<?php echo isset($_POST['stpm_name']) ? implode($_POST['stpm_name']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                    <input type="date" name="stpm_approve_date[]" value="<?php echo isset($_POST['stpm_approve_date']) ? implode($_POST['poly_approve_date']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                <?php
                if (isset($_POST['stpm_transcript_documents']) && is_array($_POST['stpm_transcript_documents'])) {
                    foreach ($_POST['stpm_transcript_documents'] as $file) {
                        $encodedFileName = urlencode($file);
                        echo $file;
                    }
                }
                ?>
                </td>
            </tr>
            <!-- Row 6 -->
            <tr>
                <td>vi. Diploma</td>
                <td>
                    <input type="text" name="dip_rank[]" value="<?php echo isset($_POST['dip_rank']) ? implode($_POST['dip_rank']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                    <input type="text" name="dip_malay_result[]" value="<?php echo isset($_POST['dip_malay_result']) ? implode($_POST['dip_malay_result']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                    <input type="text" name="dip_name[]" value="<?php echo isset($_POST['dip_name']) ? implode($_POST['dip_name']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                    <input type="date" name="dip_approve_date[]" value="<?php echo isset($_POST['dip_approve_date']) ? implode($_POST['dip_approve_date']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                <?php
                if (isset($_POST['dip_transcript_documents']) && is_array($_POST['dip_transcript_documents'])) {
                    foreach ($_POST['dip_transcript_documents'] as $file) {
                        $encodedFileName = urlencode($file);
                        echo $file;
                    }
                }
                ?>
                </td>
            </tr>
            <!-- Row 7 -->
            <tr>
                <td>vii. Degree</td>
                <td>
                    <input type="text" name="deg_rank[]" value="<?php echo isset($_POST['deg_rank']) ? implode($_POST['deg_rank']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                    <input type="text" name="deg_malay_result[]" value="<?php echo isset($_POST['deg_malay_result']) ? implode($_POST['deg_malay_result']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                    <input type="text" name="deg_name[]" value="<?php echo isset($_POST['deg_name']) ? implode($_POST['deg_name']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                    <input type="date" name="deg_approve_date[]" value="<?php echo isset($_POST['deg_approve_date']) ? implode($_POST['deg_approve_date']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                <?php
                if (isset($_POST['deg_transcript_documents']) && is_array($_POST['deg_transcript_documents'])) {
                    foreach ($_POST['deg_transcript_documents'] as $file) {
                        $encodedFileName = urlencode($file);
                        echo $file;
                    }
                }
                ?>
                </td>
            </tr>
            <!-- Row 8 -->
            <tr>
                <td>viii. Master</td>
                <td>
                    <input type="text" name="mas_rank[]" value="<?php echo isset($_POST['mas_rank']) ? implode($_POST['mas_rank']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                    <input type="text" name="mas_malay_result[]" value="<?php echo isset($_POST['mas_malay_result']) ? implode($_POST['mas_malay_result']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                    <input type="text" name="mas_name[]" value="<?php echo isset($_POST['mas_name']) ? implode($_POST['mas_name']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                    <input type="date" name="mas_approve_date[]" value="<?php echo isset($_POST['mas_approve_date']) ? implode($_POST['mas_approve_date']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                    <?php
                    if (isset($_POST['mas_transcript_documents']) && is_array($_POST['mas_transcript_documents'])) {
                        foreach ($_POST['mas_transcript_documents'] as $file) {
                            $encodedFileName = urlencode($file);
                            echo $file;
                        }
                    }
                    ?>
                </td>

                </td>
            </tr>
        </table><br><br>
        13. Professional Membership (Specify length of membership): <br><br>
        <table>
            <tr>
                <th>Name of Professional Body</th>
                <th>Member Number</th>
                <th>Date</th>
            </tr>
            <!-- Row 1 -->
            <tr>
                <td>i.
                <input type="text" name="first_professional_name[]" value="<?php echo isset($_POST['first_professional_name']) ? implode($_POST['first_professional_name']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                <input type="text" name="first_member_num[]" value="<?php echo isset($_POST['first_member_num']) ? implode($_POST['first_member_num']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                <input type="date" name="first_date[]" value="<?php echo isset($_POST['first_date']) ? implode($_POST['first_date']) : ''; ?>" readonly style="text-align: center;">
                </td>
            </tr>
            <!-- Row 2 -->
            <tr>
                <td>ii. 
                <input type="text" name="second_professional_name[]" value="<?php echo isset($_POST['second_professional_name']) ? implode($_POST['second_professional_name']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                <input type="text" name="second_member_num[]" value="<?php echo isset($_POST['second_member_num']) ? implode($_POST['second_member_num']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                <input type="date" name="second_date[]" value="<?php echo isset($_POST['second_date']) ? implode($_POST['second_date']) : ''; ?>" readonly style="text-align: center;">
                </td>
            </tr>
            <!-- Row 3 -->
            <tr>
                <td>iii. 
                <input type="text" name="third_professional_name[]" value="<?php echo isset($_POST['third_professional_name']) ? implode($_POST['third_professional_name']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                <input type="text" name="third_member_num[]" value="<?php echo isset($_POST['third_member_num']) ? implode($_POST['third_member_num']) : ''; ?>" readonly style="text-align: center;">
                </td>
                <td>
                <input type="date" name="third_date[]" value="<?php echo isset($_POST['third_date']) ? implode($_POST['third_date']) : ''; ?>" readonly style="text-align: center;">
                </td>
        </table>

    </div>
    
    <div class="form-section">
        <div class="purple-box">C. Work Experience:</div><br>
        <!-- Display the filled data -->
        14. Please provide information about past jobs to date in chronological order:<br><br>
        <span style="margin-right: 28px;"></span><span class="reminder">REMINDER</span>  : Include a letter of confirmation from the employer or letter of offer and termination of service.<br>
        <span style="margin-right: 126px;"></span><span style="font-style:italic;">(Applicants from Officers Currently Serving in Public Service/Statutory Bodies/Local Authorities</span><br>
        <span style="margin-right: 126px;"></span><span style="font-style:italic;">must be through the Head of the respective Department and must be accompanied by a copy of the Service Statement
updated)</span><br><br>

<table border="1">
    <tr>
        <th colspan="2">Date</th>
        <th rowspan="2">Position Held</th>
        <th rowspan="2">Employer's Name</th>
        <th rowspan="2">Employer's Address</th>
        <th rowspan="2">Salary</th>
        <th rowspan="2">Letter of Confirmation or Offer</th>
    </tr>
    <tr>
        <th>Start</th>
        <th>End</th>
    </tr>
    <!-- Row 1 -->
    <tr>
        <td>
        <input type="date" name="first_start[]" value="<?php echo isset($_POST['first_start']) ? implode($_POST['first_start']) : ''; ?>" readonly style="text-align: center;">          
        </td>
        <td>
        <input type="date" name="first_end[]" value="<?php echo isset($_POST['first_end']) ? implode($_POST['first_end']) : ''; ?>" readonly style="text-align: center;">          
        </td>
        <td>
        <input type="text" name="first_position[]" value="<?php echo isset($_POST['first_position']) ? implode($_POST['first_position']) : ''; ?>" readonly style="text-align: center;">          
        </td>
        <td>
        <input type="text" name="first_emp_name[]" value="<?php echo isset($_POST['first_emp_name']) ? implode($_POST['first_emp_name']) : ''; ?>" readonly style="text-align: center;">          
        </td>
        <td>
        <input type="text" name="first_emp_address[]" value="<?php echo isset($_POST['first_emp_address']) ? implode($_POST['first_emp_address']) : ''; ?>" readonly style="text-align: center;">          
        </td>
        <td>
        <input type="text" name="first_salary[]" value="<?php echo isset($_POST['first_salary']) ? implode($_POST['first_salary']) : ''; ?>" readonly style="text-align: center;">          
        </td>
        <td>
        <?php
            if (isset($_POST['first_letter_documents']) && is_array($_POST['first_letter_documents'])) {
                foreach ($_POST['first_letter_documents'] as $file) {
                    $encodedFileName = urlencode($file);
                    echo $file;
                }
            }
            ?>
        </td>
    </tr>
    <!-- Row 2 -->
    <tr>
    <td>
        <input type="date" name="second_start[]" value="<?php echo isset($_POST['second_start']) ? implode($_POST['second_start']) : ''; ?>" readonly style="text-align: center;">          
        </td>
        <td>
        <input type="date" name="second_end[]" value="<?php echo isset($_POST['second_end']) ? implode($_POST['second_end']) : ''; ?>" readonly style="text-align: center;">          
        </td>
        <td>
        <input type="text" name="second_position[]" value="<?php echo isset($_POST['second_position']) ? implode($_POST['second_position']) : ''; ?>" readonly style="text-align: center;">          
        </td>
        <td>
        <input type="text" name="second_emp_name[]" value="<?php echo isset($_POST['second_emp_name']) ? implode($_POST['second_emp_name']) : ''; ?>" readonly style="text-align: center;">          
        </td>
        <td>
        <input type="text" name="second_emp_address[]" value="<?php echo isset($_POST['second_emp_address']) ? implode($_POST['second_emp_address']) : ''; ?>" readonly style="text-align: center;">          
        </td>
        <td>
        <input type="text" name="second_salary[]" value="<?php echo isset($_POST['second_salary']) ? implode($_POST['second_salary']) : ''; ?>" readonly style="text-align: center;">          
        </td>
        <td>
        <?php
            if (isset($_POST['second_letter_documents']) && is_array($_POST['second_letter_documents'])) {
                foreach ($_POST['second_letter_documents'] as $file) {
                    $encodedFileName = urlencode($file);
                    echo $file;
                }
            }
            ?>
        </td>
    </tr>
    <!-- Row 3 -->
    <tr>
    <td>
        <input type="date" name="third_start[]" value="<?php echo isset($_POST['third_start']) ? implode($_POST['third_start']) : ''; ?>" readonly style="text-align: center;">          
        </td>
        <td>
        <input type="date" name="third_end[]" value="<?php echo isset($_POST['third_end']) ? implode($_POST['third_end']) : ''; ?>" readonly style="text-align: center;">          
        </td>
        <td>
        <input type="text" name="third_position[]" value="<?php echo isset($_POST['third_position']) ? implode($_POST['third_position']) : ''; ?>" readonly style="text-align: center;">          
        </td>
        <td>
        <input type="text" name="third_emp_name[]" value="<?php echo isset($_POST['third_emp_name']) ? implode($_POST['third_emp_name']) : ''; ?>" readonly style="text-align: center;">          
        </td>
        <td>
        <input type="text" name="third_emp_address[]" value="<?php echo isset($_POST['third_emp_address']) ? implode($_POST['third_emp_address']) : ''; ?>" readonly style="text-align: center;">          
        </td>
        <td>
        <input type="text" name="third_salary[]" value="<?php echo isset($_POST['third_salary']) ? implode($_POST['third_salary']) : ''; ?>" readonly style="text-align: center;">          
        </td>
        <td>
        <?php
            if (isset($_POST['third_letter_documents']) && is_array($_POST['third_letter_documents'])) {
                foreach ($_POST['third_letter_documents'] as $file) {
                    $encodedFileName = urlencode($file);
                    echo $file;
                }
            }
            ?>
        </td>
    </tr>
    <!-- Row 4 -->
    <tr>
    <td>
        <input type="date" name="forth_start[]" value="<?php echo isset($_POST['forth_start']) ? implode($_POST['forth_start']) : ''; ?>" readonly style="text-align: center;">          
        </td>
        <td>
        <input type="date" name="forth_end[]" value="<?php echo isset($_POST['forth_end']) ? implode($_POST['forth_end']) : ''; ?>" readonly style="text-align: center;">          
        </td>
        <td>
        <input type="text" name="forth_position[]" value="<?php echo isset($_POST['forth_position']) ? implode($_POST['forth_position']) : ''; ?>" readonly style="text-align: center;">          
        </td>
        <td>
        <input type="text" name="forth_emp_name[]" value="<?php echo isset($_POST['forth_emp_name']) ? implode($_POST['forth_emp_name']) : ''; ?>" readonly style="text-align: center;">          
        </td>
        <td>
        <input type="text" name="forth_emp_address[]" value="<?php echo isset($_POST['forth_emp_address']) ? implode($_POST['forth_emp_address']) : ''; ?>" readonly style="text-align: center;">          
        </td>
        <td>
        <input type="text" name="forth_salary[]" value="<?php echo isset($_POST['forth_salary']) ? implode($_POST['forth_salary']) : ''; ?>" readonly style="text-align: center;">          
        </td>
        <td>
        <?php
            if (isset($_POST['forth_letter_documents']) && is_array($_POST['forth_letter_documents'])) {
                foreach ($_POST['forth_letter_documents'] as $file) {
                    $encodedFileName = urlencode($file);
                    echo $file;
                }
            }
            ?>
        </td>
    </tr>
    <!-- Row 5 -->
    <tr>
    <td>
        <input type="date" name="fifth_start[]" value="<?php echo isset($_POST['fifth_start']) ? implode($_POST['fifth_start']) : ''; ?>" readonly style="text-align: center;">          
        </td>
        <td>
        <input type="date" name="fifth_end[]" value="<?php echo isset($_POST['fifth_end']) ? implode($_POST['fifth_end']) : ''; ?>" readonly style="text-align: center;">          
        </td>
        <td>
        <input type="text" name="fifth_position[]" value="<?php echo isset($_POST['fifth_position']) ? implode($_POST['fifth_position']) : ''; ?>" readonly style="text-align: center;">          
        </td>
        <td>
        <input type="text" name="fifth_emp_name[]" value="<?php echo isset($_POST['fifth_emp_name']) ? implode($_POST['fifth_emp_name']) : ''; ?>" readonly style="text-align: center;">          
        </td>
        <td>
        <input type="text" name="fifth_emp_address[]" value="<?php echo isset($_POST['fifth_emp_address']) ? implode($_POST['fifth_emp_address']) : ''; ?>" readonly style="text-align: center;">          
        </td>
        <td>
        <input type="text" name="fifth_salary[]" value="<?php echo isset($_POST['fifth_salary']) ? implode($_POST['fifth_salary']) : ''; ?>" readonly style="text-align: center;">          
        </td>
        <td>
        <?php
            if (isset($_POST['fifth_letter_documents']) && is_array($_POST['fifth_letter_documents'])) {
                foreach ($_POST['fifth_letter_documents'] as $file) {
                    $encodedFileName = urlencode($file);
                    echo $file;
                }
            }
            ?>
        </td>
    </tr>
</table>
    </div>

    <div class="form-section">
        <div class="purple-box">D. Applicant Verification:</div><br>
        <div class="left-section">
            <label>
                <!-- Display the checkbox and acknowledgement -->
                <input type="checkbox" name="acknowledge" checked <?php echo (isset($formData['acknowledge']) && $formData['acknowledge']) ? 'checked' : ''; ?>>
                15. <b>I declare that all the information above is true and correct.</b>
            </label>
        </div>

        <div class="right-section">   
            <label for="date"><b>Date:</b></label>
            <!-- Display the date of acknowledgement -->
            <input type="date" name="acknowledge_date" style="width: 200px" value="<?php echo isset($_SESSION['form_data']['acknowledge_date']) ? $_SESSION['form_data']['acknowledge_date'] : ''; ?>" readonly style="text-align: center;">
        </div>

        <!-- Add buttons for submitting and editing -->
        <div style="text-align: center; margin-top: 20px;">
            <input type="submit" value="Submit" onclick="window.location.href='uitmPage.php';">
        </div>
    </div>
    </form>
</body>
</html>
