<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Data</title>
        <meta name="description" content="Admin Main Page | DBMS Mini Project">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/styles2.css">
    </head>
    <body>
        <form action = "php/logout.php" method="POST"> 
            <div class="logout">
                <input type="submit" value="Log Out" name="logout">
            </div>
        </form>

        <?php 
            session_start();
            require 'php/config.php';

            if (isset($_SESSION['login_user'])) {
                $userLoggedIn = $_SESSION['login_user'];
                $query = "SELECT * 
                FROM student_details S
                INNER JOIN jee_details J            ON S.id = J.id
                INNER JOIN fees_details F           ON J.id = F.id
                INNER JOIN hostel_details H         ON F.id = H.id
                INNER JOIN address_details A        ON H.id = A.id
                INNER JOIN education_details E      ON A.id = E.id
                INNER JOIN education_details_2 E2   ON E.id = E2.id
                INNER JOIN health_details H2        ON E2.id = H2.id
                INNER JOIN declaration_details D    ON H2.id = D.id";
                $result = mysqli_query($con, $query);
                if (!$result) {
                    printf("Error: %s\n", mysqli_error($con));
                    exit();
                }
                
                echo "<table border='1' id='data-table'>
                <tr>
                    <th colspan='15'>Student Details</th>
                    <th colspan='8'>JEE Details</th>
                    <th colspan='6'>Fees Details</th>
                    <th colspan='15'>Hostel Details</th>
                    <th colspan='10'>Address Details</th>
                    <th colspan='10'>Education Details</th>
                    <th colspan='6'>Education Details</th>
                    <th colspan='2'>Health Details</th>
                    <th colspan='2'>Declaration Details</th>
                </tr>
                <tr>
                    <th colspan='15'></th>
                    <th colspan='8'></th>
                    <th colspan='3'>JoSSA 2019 Counselling</th>
                    <th colspan='3'>At Institute Reporting</th>
                    <th colspan='1'></th>
                    <th colspan='14'>Enclosures</th>
                    <th colspan='5'>Address for Correspondence</th>
                    <th colspan='5'>Permanent Address</th>
                    <th colspan='5'>10th / SSC</th>
                    <th colspan='5'>12th / HSC</th>
                    <th colspan='6'>Files Uploaded</th>
                    <th colspan='2'></th>
                    <th colspan='2'></th>
                </tr>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Blood Group</th>
                    <th>DOB</th>
                    <th>Mob1</th>
                    <th>Mob2</th>
                    <th>Email</th>
                    <th>Aadhar</th>
                    <th>Father's Name</th>
                    <th>Father's Occupation</th>
                    <th>Mother's Name</th>
                    <th>Mother's Occupation</th>
                    <th>Branch</th>
                    <th>Minority</th>
                    <th>Disability</th>
                        
                    <th>JEE Round</th>
                    <th>JEE Roll</th>
                    <th>JEE Rank</th>
                    <th>JEE Mark</th>
                    <th>JEE Score</th>
                    <th>JEE Year</th>
                    <th>Allotment Category</th>
                    <th>Candidate Category</th>
                        
                    <th>DD/ECS No.</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>DD/ECS No.</th>
                    <th>Date</th>
                    <th>Amount</th>
                        
                    <th>Hostel Required</th>
                    <th>Seat Allotment Letter</th>
                    <th>JEE Rank Card</th>
                    <th>Photo ID Proof</th>
                    <th>DOB Certificate</th>
                    <th>Qualifying Examination Mark-Sheet</th>
                    <th>Income Certificate (For EWS)</th>
                    <th>Cast Certificate</th>
                    <th>Cast Validity</th>
                    <th>Non-Creamy Layer Certificate</th>
                    <th>Disability Certificate</th>
                    <th>Transfer Certificate</th>
                    <th>Migration Certificate</th>
                    <th>Aadhaar Card</th>
                    <th>GAP Certificate</th>

                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Pincode</th>
                    <th>Mobile</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Pincode</th>
                    <th>Mobile</th>
                        
                    <th>Board</th>
                    <th>Subject</th>
                    <th>Year</th>
                    <th>Marks</th>
                    <th>Grade</th>
                    <th>Board</th>
                    <th>Subject</th>
                    <th>Year</th>
                    <th>Marks</th>
                    <th>Grade</th>
                        
                    <th>10th Marksheet</th>
                    <th>12th Marksheet</th>
                    <th>Aadhar</th>
                    <th>Category Certificate</th>
                    <th>PWD Certificate</th>
                    <th>EWS Certificate</th>
                        
                    <th>Chronic Disease</th>
                    <th>Details</th>
                        
                    <th>Date</th>
                    <th>Signature</th>
                </tr>";

                while($data = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>" . $data['name'] . "</td>";
                    echo "<td>" . $data['gender'] . "</td>";
                    echo "<td>" . $data['blood-grp'] . "</td>";
                    echo "<td>" . $data['dob'] . "</td>";
                    echo "<td>" . $data['mob1'] . "</td>";
                    echo "<td>" . $data['mob2'] . "</td>";
                    echo "<td>" . $data['email'] . "</td>";
                    echo "<td>" . $data['aadhar'] . "</td>";
                    echo "<td>" . $data['f_name'] . "</td>";
                    echo "<td>" . $data['f_occ'] . "</td>";
                    echo "<td>" . $data['m_name'] . "</td>";
                    echo "<td>" . $data['m_occ'] . "</td>";
                    echo "<td>" . $data['branch'] . "</td>";
                    echo "<td>" . $data['minority'] . "</td>";
                    echo "<td>" . $data['disability'] . "</td>";
                    
                    echo "<td>" . $data['jee-round'] . "</td>";
                    echo "<td>" . $data['jee-roll'] . "</td>";
                    echo "<td>" . $data['jee-rank'] . "</td>";
                    echo "<td>" . $data['jee-mark'] . "</td>";
                    echo "<td>" . $data['jee-score'] . "</td>";
                    echo "<td>" . $data['jee-year'] . "</td>";
                    echo "<td>" . $data['allotment-category'] . "</td>";
                    echo "<td>" . $data['candidate-category'] . "</td>";
                    
                    echo "<td>" . $data['fees-no-1'] . "</td>";
                    echo "<td>" . $data['fees-date-1'] . "</td>";
                    echo "<td>" . $data['fees-amt-1'] . "</td>";
                    echo "<td>" . $data['fees-no-2'] . "</td>";
                    echo "<td>" . $data['fees-date-2'] . "</td>";
                    echo "<td>" . $data['fees-amt-2'] . "</td>";

                    echo "<td>" . $data['hostel-req'] . "</td>";
                    echo "<td>" . $data['encl-1'] . "</td>";
                    echo "<td>" . $data['encl-2'] . "</td>";
                    echo "<td>" . $data['encl-3'] . "</td>";
                    echo "<td>" . $data['encl-4'] . "</td>";
                    echo "<td>" . $data['encl-5'] . "</td>";
                    echo "<td>" . $data['encl-6'] . "</td>";
                    echo "<td>" . $data['encl-7'] . "</td>";
                    echo "<td>" . $data['encl-8'] . "</td>";
                    echo "<td>" . $data['encl-9'] . "</td>";
                    echo "<td>" . $data['encl-10'] . "</td>";
                    echo "<td>" . $data['encl-11'] . "</td>";
                    echo "<td>" . $data['encl-12'] . "</td>";
                    echo "<td>" . $data['encl-13'] . "</td>";
                    echo "<td>" . $data['encl-14'] . "</td>";

                    echo "<td>" . $data['add-1'] . "</td>";
                    echo "<td>" . $data['add-city-1'] . "</td>";
                    echo "<td>" . $data['add-state-1'] . "</td>";
                    echo "<td>" . $data['add-pincode-1'] . "</td>";
                    echo "<td>" . $data['add-mob-1'] . "</td>";
                    echo "<td>" . $data['add-2'] . "</td>";
                    echo "<td>" . $data['add-city-2'] . "</td>";
                    echo "<td>" . $data['add-state-2'] . "</td>";
                    echo "<td>" . $data['add-pincode-2'] . "</td>";
                    echo "<td>" . $data['add-mob-2'] . "</td>";

                    echo "<td>" . $data['ed-board-1'] . "</td>";
                    echo "<td>" . $data['ed-sub-1'] . "</td>";
                    echo "<td>" . $data['ed-year-1'] . "</td>";
                    echo "<td>" . $data['ed-marks-1'] . "</td>";
                    echo "<td>" . $data['ed-grade-1'] . "</td>";
                    echo "<td>" . $data['ed-board-2'] . "</td>";
                    echo "<td>" . $data['ed-sub-2'] . "</td>";
                    echo "<td>" . $data['ed-year-2'] . "</td>";
                    echo "<td>" . $data['ed-marks-2'] . "</td>";
                    echo "<td>" . $data['ed-grade-2'] . "</td>";
                        
                    echo "<td>" . $data['file-1'] . "</td>";
                    echo "<td>" . $data['file-2'] . "</td>";
                    echo "<td>" . $data['file-3'] . "</td>";
                    echo "<td>" . $data['file-4'] . "</td>";
                    echo "<td>" . $data['file-5'] . "</td>";
                    echo "<td>" . $data['file-6'] . "</td>";
                    
                    echo "<td>" . $data['disease'] . "</td>";
                    echo "<td>" . $data['dis-details'] . "</td>";

                    echo "<td>" . $data['date'] . "</td>";
                    echo "<td>" . $data['sign'] . "</td>";
                    echo "</tr>";
                }

                echo "</table>";                                                                    
            }
            else {
                //header("Location: index.php");
            }
        ?>
    </body>
</html>