<?php
// Start or resume the session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process and validate form data...

    // Store the form data in the session
    $_SESSION['form_data'] = $_POST;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
    <link rel="stylesheet" type="text/css" href="hiasForm.css">
    <script src="scriptForm.js" defer></script>

</head>
<body>

    <div>
        <a href="uitmPage.php"><button>Back</button></a>
        </div>

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

    <form action="confirmForm.php" method="post">
    <div class="right-section">
        <div>Please insert your passport image:</div>
        <div><input type="file" name="passport_image" accept="image/*" onchange="displayImage(this)"></div>
        <img id="imagePreview" alt="Image Preview" style="width: 110px; max-width: 100%; height: 120px; margin-top: 10px;">
    </div>
</div>
     Requested Job Position: 
     <select name="position">
                    <option value="C29">Assistant Science Officer</option>
                    <option value="N19">Administrative Assistant (Clerical/Operational)</option>
                    <option value="S19">Assistant Librarian</option>
                    <option value="W19">Administrative Assistant (Finance)</option>
                    <option value="H11">Public Assistant</option>
                </select><br><br>
<div>
    
    <div class="form-section">
        <div class="purple-box">A. Self Description:</div><br>
            
            1. Full Name: <input type="text" name="full_name" required><br>
            2. Old Identification Card/ Passport Number:
                <input type="text" name="old_ic_number" style="width: 300px;">
            2a. New Identification Card Number:
                <input type="text" name="new_ic_number" style="width: 300px;"><br><br>
            3. Citizenship:
                <select name="citizenship">
                    <option value="M">Malaysian</option>
                    <option value="B">Non-Malaysian</option>
                </select>
                4. Race:
                <select name="race">
                    <option value="Malay">Malay</option>
                    <option value="Chinese">Chinese</option>
                    <option value="indian">Indian</option>
                    <option value="Orang Asli">Orang Asli</option>
                    <option value="Iban">Iban</option>
                    <option value="Melanau">Melanau</option>
                    <option value="Kadazandusun">Kadazandusun</option>
                    <option value="Bidayuh">Bidayuh</option>
                    <option value="Bajauh">Bajauh</option>
                </select>
            5. Religion:
                <select name="religion">
                    <option value="Islam">Islam</option>
                    <option value="Christian">Christian</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Sikh">Sikh</option>
                </select><br><br>
            6. Mailing Address: <input type="text" name="mailing_address" required><br><br>
            7. Home Phone: <input type="tel" name="home_phone">
               Mobile Phone: <input type="tel" name="mobile_phone" required>
               Office Phone: <input type="tel" name="office_phone"><br><br>
            8. Birth Date:
                Day
                <select name="birth_day">
                    <?php for ($day = 1; $day <= 31; $day++) echo "<option value=\"$day\">$day</option>"; ?>
                </select>
                Month
                <select name="birth_month">
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="Mac">Mac</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
                Year
                <select name="birth_year">
                    <?php for ($year = date("Y"); $year >= 1950; $year--) echo "<option value=\"$year\">$year</option>"; ?>
                </select>
               Hometown:
                <select name="hometown">
                    <option value="Selangor">Selangor</option>
                    <option value="Kedah">Kedah</option>
                    <option value="Penang">Penang</option>
                    <option value="Perlis">Perlis</option>
                    <option value="Perak">Perak</option>
                    <option value="Kelantan">Kelantan</option>
                    <option value="Terengganu">Terengganu</option>
                    <option value="Pahang">Pahang</option>
                    <option value="Kuala Lumpur">Kuala Lumpur</option>
                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                    <option value="Johore">Johore</option>
                    <option value="Sabah">Perlis</option>
                    <option value="Sarawak">Sarawak</option>
                    <option value="Wilayah Persekutuan">Wilayah Persekutuan</option>
                </select><br><br>
            9. Marital Status:
                <select name="marital_status">
                    <option value="B">Single (Bujang)</option>
                    <option value="K">Married (Kahwin)</option>
                    <option value="J">Widow (Janda)</option>
                    <option value="D">Widower (Duda)</option>
                </select>
            10. Gender:
                <select name="gender">
                    <option value="L">Male (Lelaki)</option>
                    <option value="P">Female (Perempuan)</option>
                </select><br><br>
            11. Wife/Husband Name: <input type="text" name="spouse_name" style="width: 400px;">
                Occupation: <input type="text" name="occupation" style="width: 300px;"><br>
                Workplace Address: <input type="text" name="workplace_address"><br>
    </div>

    <div class="form-section">
        <div class="purple-box">B. History of Academic Qualifications:</div><br>
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
                <td><input type="text" name="school_rank[]"></td>
                <td><input type="text" name="school_malay_result[]"></td>
                <td><input type="text" name="school_name[]"></td>
                <td><input type="date" name="school_approve_date[]"></td>
                <td><input type="file" name="school_transcript_documents[]"></td>
            </tr>
            <!-- Row 2 -->
            <tr>
                <td>ii. SRP / PMR</td>
                <td><input type="text" name="srp_rank[]"></td>
                <td><input type="text" name="srp_malay_result[]"></td>
                <td><input type="text" name="srp_name[]"></td>
                <td><input type="date" name="srp_approve_date[]"></td>
                <td><input type="file" name="srp_transcript_documents[]"></td>
            </tr>
            <!-- Row 3 -->
            <tr>
                <td>iii. SPM / SPMV</td>
                <td><input type="text" name="spm_rank[]"></td>
                <td><input type="text" name="spm_malay_result[]"></td>
                <td><input type="text" name="spm_name[]"></td>
                <td><input type="date" name="spm_approve_date[]"></td>
                <td><input type="file" name="spm_transcript_documents[]"></td>
            </tr>
            <!-- Row 4 -->
            <tr>
                <td>iv. Polytechnic Certificate</td>
                <td><input type="text" name="poly_rank[]"></td>
                <td><input type="text" name="poly_malay_result[]"></td>
                <td><input type="text" name="poly_name[]"></td>
                <td><input type="date" name="poly_approve_date[]"></td>
                <td><input type="file" name="poly_transcript_documents[]"></td>
            </tr>
            <!-- Row 5 -->
            <tr>
                <td>v. STPM / STAM</td>
                <td><input type="text" name="stpm_rank[]"></td>
                <td><input type="text" name="stpm_malay_result[]"></td>
                <td><input type="text" name="stpm_name[]"></td>
                <td><input type="date" name="stpm_approve_date[]"></td>
                <td><input type="file" name="stpm_transcript_documents[]"></td>
            </tr>
            <!-- Row 6 -->
            <tr>
                <td>vi. Diploma</td>
                <td><input type="text" name="dip_rank[]"></td>
                <td><input type="text" name="dip_malay_result[]"></td>
                <td><input type="text" name="dip_name[]"></td>
                <td><input type="date" name="dip_approve_date[]"></td>
                <td><input type="file" name="dip_transcript_documents[]"></td>
            </tr>
            <!-- Row 7 -->
            <tr>
                <td>vii. Degree</td>
                <td><input type="text" name="deg_rank[]"></td>
                <td><input type="text" name="deg_malay_result[]"></td>
                <td><input type="text" name="deg_name[]"></td>
                <td><input type="date" name="deg_approve_date[]"></td>
                <td><input type="file" name="deg_transcript_documents[]"></td>
            </tr>
            <!-- Row 8 -->
            <tr>
                <td>viii. Master</td>
                <td><input type="text" name="mas_rank[]"></td>
                <td><input type="text" name="mas_malay_result[]"></td>
                <td><input type="text" name="mas_name[]"></td>
                <td><input type="date" name="mas_approve_date[]"></td>
                <td><input type="file" name="mas_transcript_documents[]"></td>
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
                <td>i. <input type="text" name="first_professional_name[]"></td>
                <td><input type="text" name="first_member_num[]"></td>
                <td><input type="date" name="first_date[]"></td>
            </tr>
            <!-- Row 2 -->
            <tr>
                <td>ii. <input type="text" name="second_professional_name[]"></td>
                <td><input type="text" name="second_member_num[]"></td>
                <td><input type="date" name="second_date[]"></td>
            </tr>
            <!-- Row 3 -->
            <tr>
                <td>iii. <input type="text" name="third_professional_name[]"></td>
                <td><input type="text" name="third_member_num[]"></td>
                <td><input type="date" name="third_date[]"></td>
        </table>

    </div>
    
    <div class="form-section">
        <div class="purple-box">C. Work Experience:</div><br>
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
        <td><input type="date" name="first_start[]"></td>
        <td><input type="date" name="first_end[]"></td>
        <td><input type="text" name="first_position[]"></td>
        <td><input type="text" name="first_emp_name[]"></td>
        <td><input type="text" name="first_emp_address[]"></td>
        <td><input type="text" name="first_salary[]"></td>
        <td><input type="file" name="first_letter_documents[]"></td>
    </tr>
    <!-- Row 2 -->
    <tr>
        <td><input type="date" name="second_start[]"></td>
        <td><input type="date" name="second_end[]"></td>
        <td><input type="text" name="second_position[]"></td>
        <td><input type="text" name="second_emp_name[]"></td>
        <td><input type="text" name="second_emp_address[]"></td>
        <td><input type="text" name="second_salary[]"></td>
        <td><input type="file" name="second_letter_documents[]"></td>
    </tr>
    <!-- Row 3 -->
    <tr>
        <td><input type="date" name="third_start[]"></td>
        <td><input type="date" name="third_end[]"></td>
        <td><input type="text" name="third_position[]"></td>
        <td><input type="text" name="third_emp_name[]"></td>
        <td><input type="text" name="third_emp_address[]"></td>
        <td><input type="text" name="third_salary[]"></td>
        <td><input type="file" name="third_letter_documents[]"></td>
    </tr>
    <!-- Row 4 -->
    <tr>
        <td><input type="date" name="forth_start[]"></td>
        <td><input type="date" name="forth_end[]"></td>
        <td><input type="text" name="forth_position[]"></td>
        <td><input type="text" name="forth_emp_name[]"></td>
        <td><input type="text" name="forth_emp_address[]"></td>
        <td><input type="text" name="forth_salary[]"></td>
        <td><input type="file" name="forth_letter_documents[]"></td>
    </tr>
    <!-- Row 5 -->
    <tr>
        <td><input type="date" name="fifth_start[]"></td>
        <td><input type="date" name="fifth_end[]"></td>
        <td><input type="text" name="fifth_position[]"></td>
        <td><input type="text" name="fifth_emp_name[]"></td>
        <td><input type="text" name="fifth_emp_address[]"></td>
        <td><input type="text" name="fifth_salary[]"></td>
        <td><input type="file" name="fifth_letter_documents[]"></td>
    </tr>
</table>

    </div>

    <div class="form-section">
        <div class="purple-box">D. Applicant Verification:</div><br>
        <div class ="left-section">
        <label>
            <input type="checkbox" name="acknowledge" required>
            15. <b>I declare that all the information above is true and correct.</b>
        </label>
            </div>

        <div class ="right-section">   
        <label for="date"><b>Date:</b></label>
        <input type="date" name="acknowledge_date" style="width: 200px;" required><br>
        </div>

        <input type="submit" value="Submit" formaction="confirmForm.php">

    </div>
    </form>

</body>
</html>
