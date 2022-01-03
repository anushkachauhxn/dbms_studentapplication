<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Student Admission Webportal</title>
        <meta name="description" content="Student Admission Webportal | DBMS Mini Project">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script type="application/x-javascript">
            addEventListener("load", function() { 
                setTimeout(hideURLbar, 0); 
            }, false);

            function hideURLbar(){ 
                window.scrollTo(0,1); 
            } 
        </script>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="./css/styles.css">
    </head>
    <body>
        <form action="php/admin.php" method="POST">
            <div class="admin-login">
                <input type="submit" name="admin" value="Admin" id="admin">
            </div>
        </form>

        <h1 class="main-heading">Student Application 2019-20</h1>
        <main class="container">
            <p>Fill this application to apply for an admission IIIT Nagpur's BTech Programme.</p>
    
            <form action="php/feedback.php" method="POST" class="admission-form">
                <div class="student-details">
                    <h3>Student Details</h3>
                    <label>Student Name
                        <input type="text" name="name" id="name">
                    </label>
                    <br><br>
                    <label>Gender
                        <select name="gender" id="gender">
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                    </label>
                    <br><br>
                    <label>Blood Group
                        <select name="blood-grp" id="blood-grp">
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </label>
                    <br><br>
                    <label>Date of Birth
                        <input type="date" name="dob" id="dob">
                    </label>
                    <br><br>
                    <label>Mobile No 1
                        <input type="text" name="mob1" id="mob1">
                    </label>
                    <br><br>
                    <label>Mobile No 2
                        <input type="text" name="mob2" id="mob2">
                    </label>
                    <br><br>
                    <label>Email
                        <input type="email" name="email" id="email">
                    </label>
                    <br><br>
                    <label>Aadhaar Number
                        <input type="text" name="aadhar" id="aadhar">
                    </label>
                    <br><br>
                    <label>Father's Name
                        <input type="text" name="f_name" id="f_name">
                    </label>
                    <br><br>
                    <label>Father's Occupation
                        <input type="text" name="f_occ" id="f_occ">
                    </label>
                    <br><br>
                    <label>Mother's Name
                        <input type="text" name="m_name" id="m_name">
                    </label>
                    <br><br>
                    <label>Mother's Occupation
                        <input type="text" name="m_occ" id="m_occ">
                    </label>
                    <br><br>
                    <label>Branch
                        <select name="branch" id="branch">
                            <option value="CSE">CSE</option>
                            <option value="ECE">ECE</option>
                        </select>
                    </label>
                    <br><br>
                    <label>Minority Detail
                        <select name="minority" id="minority">
                            <option value="None">None</option>
                            <option value="Muslim">Muslim</option>
                            <option value="Jain">Jain</option>
                            <option value="Sikh">Sikh</option>
                            <option value="Christian">Christian</option>
                        </select>
                    </label>
                    <br><br>
                    <label>Phyically Disabled
                        <select name="disability" id="disability">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                        </select>
                    </label>
                    <br><br>
                </div>
    
                <div class="jee-details">
                    <h3>JEE Details</h3>
                    <label>Round of Allotment
                        <input type="text" name="jee-round" id="jee-round">
                    </label>
                    <br><br>
                    <label>JEE Roll No
                        <input type="text" name="jee-roll" id="jee-roll">
                    </label>
                    <br><br>
                    <label>JEE AIR
                        <input type="text" name="jee-rank" id="jee-rank">
                    </label>
                    <br><br>
                    <label>JEE Mark
                        <input type="text" name="jee-mark" id="jee-mark">
                    </label>
                    <br><br>
                    <label>JEE Score
                        <input type="text" name="jee-score" id="jee-score">
                    </label>
                    <br><br>
                    <label>JEE Year
                        <input type="text" name="jee-year" id="jee-year">
                    </label>
                    <br><br>
                    <label>Allotment Category
                        <select name="allotment-category" id="allotment-category">
                            <option value="OP">OP</option>
                            <option value="SC">SC</option>
                            <option value="ST">ST</option>
                            <option value="OBC">OBC</option>
                            <option value="EWS">EWS</option>
                            <option value="PD">PD</option>
                        </select>
                    </label>
                    <br><br>
                    <label>Candidate Category
                        <select name="candidate-category" id="candidate-category">
                            <option value="OP">OP</option>
                            <option value="SC">SC</option>
                            <option value="ST">ST</option>
                            <option value="OBC">OBC</option>
                            <option value="PD">PD</option>
                        </select>
                    </label>
                    <br><br>
                </div>
    
                <div class="fees-details">
                    <h3>Fees Details</h3>
                    <table>
                        <tr>
                            <th id="sr-no">Sr. No.</th>
                            <th>Details</th>
                            <th>DD/ECS No.</th>
                            <th>Date</th>
                            <th>Amount</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>JoSSA 2019 counseling</td>
                            <td><input type="text" name="fees-no-1" id="fees-no-1" placeholder="DD/ECS No."></td>
                            <td><input type="date" name="fees-date-1" id="fees-date-1"></td>
                            <td><input type="text" name="fees-amt-1" id="fees-amt-1" placeholder="Rs."></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>At Institute Reporting</td>
                            <td><input type="text" name="fees-no-2" id="fees-no-2" placeholder="DD/ECS No."></td>
                            <td><input type="date" name="fees-date-1" id="fees-date-1"></td>
                            <td><input type="text" name="fees-amt-2" id="fees-amt-2" placeholder="Rs."></td>
                        </tr>
                    </table>
                    <br>
                </div>
    
                <div class="hostel-details">
                    <h3>Hostel Details</h3>
                    <label>Hostel Required
                        <select name="hostel-req" id="hostel-req">
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                        </select>
                    </label>
                    <br>
                    <h4>List of Enclosures</h4>
                    <label>1) Seat Allotment Letter
                        <select name="encl-1" id="encl-1">
                            <option value="YES">YES</option>
                            <option value="NA">NA</option>
                        </select>
                    </label>
                    <br><br>
                    <label>2) JEE Rank Card
                        <select name="encl-2" id="encl-2">
                            <option value="YES">YES</option>
                            <option value="NA">NA</option>
                        </select>
                    </label>
                    <br><br>
                    <label>3) Photo ID Proof
                        <select name="encl-3" id="encl-3">
                            <option value="YES">YES</option>
                            <option value="NA">NA</option>
                        </select>
                    </label>
                    <br><br>
                    <label>4) Certificate for Date of Birth
                        <select name="encl-4" id="encl-4">
                            <option value="YES">YES</option>
                            <option value="NA">NA</option>
                        </select>
                    </label>
                    <br><br>
                    <label>5) Qualifying Examination Mark-Sheet
                        <select name="encl-5" id="encl-5">
                            <option value="YES">YES</option>
                            <option value="NA">NA</option>
                        </select>
                    </label>
                    <br><br>
                    <label>6) Income Certificate (For EWS)
                        <select name="encl-6" id="encl-6">
                            <option value="YES">YES</option>
                            <option value="NA">NA</option>
                        </select>
                    </label>
                    <br><br>
                    <label>7) Cast Certificate
                        <select name="encl-7" id="encl-7">
                            <option value="YES">YES</option>
                            <option value="NA">NA</option>
                        </select>
                    </label>
                    <br><br>
                    <label>8) Cast Validity
                        <select name="encl-8" id="encl-8">
                            <option value="YES">YES</option>
                            <option value="NA">NA</option>
                        </select>
                        <p>*If caste certificate issued by Maharashtra Govt.</p>
                    </label>
                    
                    <label>9) Seat Allotment Letter
                        <select name="encl-9" id="encl-9">
                            <option value="YES">YES</option>
                            <option value="NA">NA</option>
                        </select>
                    </label>
                    <br><br>
                    <label>10) Non-Creamy layer Certificate for OBC Category
                        <select name="encl-10" id="encl-10">
                            <option value="YES">YES</option>
                            <option value="NA">NA</option>
                        </select>
                    </label>
                    <br><br>
                    <label>11) Transfer Certificate
                        <select name="encl-11" id="encl-11">
                            <option value="YES">YES</option>
                            <option value="NA">NA</option>
                        </select>
                    </label>
                    <br><br>
                    <label>12) Migration Certificate
                        <select name="encl-12" id="encl-12">
                            <option value="YES">YES</option>
                            <option value="NA">NA</option>
                        </select>
                    </label>
                    <br><br>
                    <label>13) Aadhaar Card
                        <select name="encl-13" id="encl-13">
                            <option value="YES">YES</option>
                            <option value="NA">NA</option>
                        </select>
                    </label>
                    <br><br>
                    <label>14) GAP Certificate
                        <select name="encl-14" id="encl-14">
                            <option value="YES">YES</option>
                            <option value="NA">NA</option>
                        </select>
                    </label>
                    <br><br>
                </div>
    
                <div class="address-details">
                    <h3>Address Details</h3>
                    <table>
                        <tr>
                            <th></th>
                            <th>Address for Correspondence</th>
                            <th>Permanent Address</th>
                        </tr>
                        <tr id="add-row">
                            <td>Address</td>
                            <td><textarea rows="5" name="add-1" id="add-1"></textarea></td>
                            <td><textarea rows="5" name="add-2" id="add-2"></textarea></td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td><input type="text" name="add-city-1" id="add-city-1"></td>
                            <td><input type="text" name="add-city-2" id="add-city-2"></td>
                        </tr>
                        <tr>
                            <td>State</td>
                            <td><input type="text" name="add-state-1" id="add-state-1"></td>
                            <td><input type="text" name="add-state-2" id="add-state-2"></td>
                        </tr>
                        <tr>
                            <td>Pincode</td>
                            <td><input type="text" name="add-pincode-1" id="add-pincode-1"></td>
                            <td><input type="text" name="add-pincode-2" id="add-pincode-2"></td>
                        </tr>
                        <tr>
                            <td>Mobile No</td>
                            <td><input type="text" name="add-mob-1" id="add-mob-1"></td>
                            <td><input type="text" name="add-mob-2" id="add-mob-2"></td>
                        </tr>
                    </table>
                    <br>
                </div>
    
                <div class="education-details">
                    <h3>Education Details</h3>
                    <table>
                        <tr>
                            <th>Class</th>
                            <th>Name of Board</th>
                            <th>Subject</th>
                            <th>Year of Passing</th>
                            <th>Marks Obtained</th>
                            <th>Percentage/ Grade</th>
                        </tr>
                        <tr>
                            <td>10th / SSC</td>
                            <td><input type="text" name="ed-board-1" id="ed-board-1"></td>
                            <td><input type="text" name="ed-sub-1" id="ed-sub-1"></td>
                            <td><input type="text" name="ed-year-1" id="ed-year-1"></td>
                            <td><input type="text" name="ed-marks-1" id="ed-marks-1"></td>
                            <td><input type="text" name="ed-grade-1" id="ed-grade-1"></td>
                        </tr>
                        <tr>
                            <td>12th / HSC</td>
                            <td><input type="text" name="ed-board-2" id="ed-board-2"></td>
                            <td><input type="text" name="ed-sub-2" id="ed-sub-2"></td>
                            <td><input type="text" name="ed-year-2" id="ed-year-2"></td>
                            <td><input type="text" name="ed-marks-2" id="ed-marks-2"></td>
                            <td><input type="text" name="ed-grade-2" id="ed-grade-2"></td>
                        </tr>
                    </table>
                </div>
    
                <div class="education-details-2">
                    <h4>Scanned copies of documents uploaded?</h4>
                    <label>1) 10th Marksheet
                        <select name="file-1" id="file-1">
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                        </select>
                    </label>
                    <br><br>
                    <label>2) 12th Marksheet
                        <select name="file-2" id="file-2">
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                        </select>
                    </label>
                    <br><br>
                    <label>3) Aadhaar
                        <select name="file-3" id="file-3">
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                        </select>
                    </label>
                    <br><br>
                    <label>4) Category Certificate
                        <select name="file-4" id="file-4">
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                        </select>
                    </label>
                    <br><br>
                    <label>5) PWD Certificate
                        <select name="file-5" id="file-5">
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                        </select>
                    </label>
                    <br><br>
                    <label>6) EWS Certificate
                        <select name="file-6" id="file-6">
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                        </select>
                    </label>
                    <br><br>
                </div>
    
                <div class="health-details">
                    <h4>Whether suffering from any chronic disease</h4>
                    <select name="disease" id="disease">
                        <option value="NO">NO</option>
                        <option value="YES">YES</option>
                    </select>
                    <p>If yes, please provide detailed information.</p>
                    <textarea rows="5" name="dis-details" id="dis-details"></textarea>
                    <br><br>
                </div>
    
                <div class="declaration-details">
                    <h4>Declaration by the applicant</h4>
                    <p>I certified that all information provided by me in this form is correct to the best of my knowledge and belief. I understand that any willful misrepresentation of facts will result in my dismissal from the Institute. If admitted, I shall abide by all rules and regulations of the Institute.</p>
                    <label>Date
                        <input type="date" name="date" id="date">
                    </label>
                    <br><br><br>
                    <label>Signature of Applicant
                        <div class="upload-file">
                            <i class="fa fa-upload" aria-hidden="true"></i>
                            Upload
                            <input type="file" name="sign" id="sign">
                        </div>
                    </label>
                    <br><br>
                </div>
    
                <div class="submit-form">
                    <input type="submit" name="submit" value="Submit" id="submit">
                </div>
            </form>
            <br>
        </main>
        
        <footer class="copyright-text">
            <p>© Copyright Anushka Chauhan 2021 </p>
        </footer>
    </body>
</html>