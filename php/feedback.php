<?php 
    ob_start(); 
    require 'config.php';

    // Student Details
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $blood_grp = $_POST['blood-grp'];
    $dob = $_POST['dob'];
    $mob1 = $_POST['mob1'];
    $mob2 = $_POST['mob2'];
    $email = $_POST['email'];
    $aadhar = $_POST['aadhar'];
    $f_name = $_POST['f_name'];
    $f_occ = $_POST['f_occ'];
    $m_name = $_POST['m_name'];
    $m_occ = $_POST['m_occ'];
    $branch = $_POST['branch'];
    $minority = $_POST['minority'];
    $disability = $_POST['disability'];

    $query_1 = mysqli_query($con, "INSERT INTO `student_details` VALUES (
        '', 
        '$name',
        '$gender',
        '$blood_grp',
        '$dob',
        '$mob1',
        '$mob2',
        '$email',
        '$aadhar',
        '$f_name',
        '$f_occ',
        '$m_name',
        '$m_occ',
        '$branch',
        '$minority',
        '$disability')"
    );

    // JEE Details
    $jee_round = $_POST['jee-round'];
    $jee_roll = $_POST['jee-roll'];
    $jee_rank = $_POST['jee-rank'];
    $jee_mark = $_POST['jee-mark'];
    $jee_score = $_POST['jee-score'];
    $jee_year = $_POST['jee-year'];
    $allotment_category = $_POST['allotment-category'];
    $candidate_category = $_POST['aadhar'];

    $query_2 = mysqli_query($con, "INSERT INTO `jee_details` VALUES (
        '', 
        '$jee_round',
        '$jee_roll',
        '$jee_rank',
        '$jee_mark',
        '$jee_score',
        '$jee_year',
        '$allotment_category',
        '$candidate_category')"
    );

    // Fees Details
    $fees_no1 = $_POST['fees-no-1'];
    $fees_date1 = $_POST['fees-date-1'];
    $fees_amt1 = $_POST['fees-amt-1'];
    $fees_no2 = $_POST['fees-no-2'];
    $fees_date2 = $_POST['fees-date-2'];
    $fees_amt2 = $_POST['fees-amt-2'];

    $query_3 = mysqli_query($con, "INSERT INTO `fees_details` VALUES (
        '', 
        '$fees_no1',
        '$fees_date1',
        '$fees_amt1',
        '$fees_no2',
        '$fees_date2',
        '$fees_amt2')"
    );

    // Hostel Details
    $hostel_req = $_POST['hostel-req'];
    $encl1 = $_POST['encl-1'];
    $encl2 = $_POST['encl-2'];
    $encl3 = $_POST['encl-3'];
    $encl4 = $_POST['encl-4'];
    $encl5 = $_POST['encl-5'];
    $encl6 = $_POST['encl-6'];
    $encl7 = $_POST['encl-7'];
    $encl8 = $_POST['encl-8'];
    $encl9 = $_POST['encl-9'];
    $encl10 = $_POST['encl-10'];
    $encl11 = $_POST['encl-11'];
    $encl12 = $_POST['encl-12'];
    $encl13 = $_POST['encl-13'];
    $encl14 = $_POST['encl-14'];


    $query_4 = mysqli_query($con, "INSERT INTO `hostel_details` VALUES (
        '', 
        '$hostel_req',
        '$encl1',
        '$encl2',
        '$encl3',
        '$encl4',
        '$encl5',
        '$encl6',
        '$encl7',
        '$encl8',
        '$encl9',
        '$encl10',
        '$encl11',
        '$encl12',
        '$encl13',
        '$encl14')"
    );

    // Address Details
    $add1 = $_POST['add-1'];
    $add_city1 = $_POST['add-city-1'];
    $add_state1 = $_POST['add-state-1'];
    $add_pincode1 = $_POST['add-pincode-1'];
    $add_mob1 = $_POST['add-mob-1'];
    $add2 = $_POST['add-2'];
    $add_city2 = $_POST['add-city-2'];
    $add_state2 = $_POST['add-state-2'];
    $add_pincode2 = $_POST['add-pincode-2'];
    $add_mob2 = $_POST['add-mob-2'];

    $query_5 = mysqli_query($con, "INSERT INTO `address_details` VALUES (
        '', 
        '$add1',
        '$add_city1',
        '$add_state1',
        '$add_pincode1',
        '$add_mob1',
        '$add2',
        '$add_city2',
        '$add_state2',
        '$add_pincode2',
        '$add_mob2')"
    );

    // Education Details
    $ed_board1 = $_POST['ed-board-1'];
    $ed_sub1 = $_POST['ed-sub-1'];
    $ed_year1 = $_POST['ed-year-1'];
    $ed_marks1 = $_POST['ed-marks-1'];
    $ed_grade1 = $_POST['ed-grade-1'];
    $ed_board2 = $_POST['ed-board-2'];
    $ed_sub2 = $_POST['ed-sub-2'];
    $ed_year2 = $_POST['ed-year-2'];
    $ed_marks2 = $_POST['ed-marks-2'];
    $ed_grade2 = $_POST['ed-grade-2'];

    $query_6 = mysqli_query($con, "INSERT INTO `education_details` VALUES (
        '', 
        'ed_board1',
        'ed_sub1',
        'ed_year1',
        'ed_marks1',
        'ed_grade1',
        'ed_board2',
        'ed_sub2',
        'ed_year2',
        'ed_marks2',
        'ed-grade2')"
    );

    // Education Details 2
    $file1 = $_POST['file-1'];
    $file2 = $_POST['file-2'];
    $file3 = $_POST['file-3'];
    $file4 = $_POST['file-4'];
    $file5 = $_POST['file-5'];
    $file6 = $_POST['file-6'];

    $query_7 = mysqli_query($con, "INSERT INTO `education_details_2` VALUES (
        '', 
        'file1',
        'file2',
        'file3',
        'file4',
        'file5',
        'file6')"
    );

    // Health Details
    $disease = $_POST['disease'];
    $dis_details = $_POST['dis-details'];

    $query_8 = mysqli_query($con, "INSERT INTO `health_details` VALUES (
        '', 
        'disease',
        'dis_details')"
    );

    // Declaration Details
    $date = $_POST['date'];
    $sign = $_POST['sign'];

    $query_9 = mysqli_query($con, "INSERT INTO `declaration_details` VALUES (
        '', 
        'date',
        'sign')"
    );

    echo '<script>alert("Submission Successful"); location.replace(document.referrer);</script>';
    
?>