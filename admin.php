<?php session_start(); 
if($_SESSION['login_inv_admin'] == 'Admin')
{
    include('db_connection.php');
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin Login</title>
    <script src="https://kit.fontawesome.com/438020997e.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div id="main">
            <span class="menu" onclick="openNav()">&#9776;&nbsp;&nbsp;&nbsp;&nbsp;Library Management - Admin</span>
        </div>
        <form action="logout_process.php" method="POST">
        <button class="logoutbtn"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;&nbsp;Logout</button>
        </form>
    </header>
    <!--Side Nav-->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">X</a>
        <label class="navhed">Admin</label><br><br>
        <table>
            <tr>
                <td><i class="fa-solid fa-table-columns"></i></td>
                <td><input type="button" name="dashboard" class="label" value="Dashboard"
                        onclick="showDashboard('alct_amt','dept','dashboard','chngpswrd')"></td>
            </tr>
            <tr>
                <td><i class="fa-solid fa-coins"></i></td>
                <td><input type="button" name="alct_amt" class="label" value="Allocate Amount"
                        onclick="showAclt_amt('alct_amt','dept','dashboard','chngpswrd')"></td>
            </tr>
            <tr>
                <td><i class="fa-solid fa-book"></i></td>
                <td><input type="button" name="book_req" class="label" value="Book Orders"
                        onclick="showBook_req('alct_amt','dept','dashboard','chngpswrd')"></td>
            </tr>
            <tr>
                <td><i class="fa-solid fa-key"></i></td>
                <td><input type="button" name="book_req" class="label" value="My Account"
                        onclick="showchngpswrd('alct_amt','dept','dashboard','chngpswrd')"></td>
            </tr>
        </table>


    </div>


    <!--Dashboard-->


    <div class="dashboard" id="dashboard">
        <h2 style="margin-left: 30px; position: absolute;top:110px;">Dashboard</h2>
        <div class="card">
            <h3>123</h3>
            <p class="caption">Total Departments</p>
        </div>
        <div class="card">
            <h3>123</h3>
            <p class="caption">Amount Allocated</p>
        </div>
        <div class="card">
            <h3>123</h3>
            <p class="caption">Total Requests</p>
        </div>
        <div class="card">
            <h3>123</h3>
            <p class="caption">Bending Requests</p>
        </div>
        <div class="card">
            <h3>123</h3>
            <p class="caption">&nbsp;&nbsp;Bills Uploaded&nbsp;&nbsp;</p>
        </div>

    </div>



    <div id="alct_amt" style="display:none;">
        <h2 style="margin-left: 30px; position: absolute;top:100px;">Budget Allocation</h2>
        <div class="chngpswrd bxsd" style="margin-top: 90px;">
            <form action="admin_process.php" method="POST">
                <h4>Allocate Budget For Department</h4>
                <label class="lble">Department Name</label><br>
                <input type="search" list="department" name="department" class="inpt" placeholder="Type or Choose"
                    required><br>
                <datalist id="department">
                    <option>B.COM.HONOURS</option>
                    <option>BIOCHEMISTRY</option>
                    <option>BIOTECHNOLOGY</option>
                    <option>BOTONY</option>
                    <option>BUSINESS ADMINISTRATION</option>
                    <option>CHEMISTRY</option>
                    <option>COMMERCE COMPUTER APPLICATIONS</option>
                    <option>COMPUTER SCIENCE</option>
                    <option>COMMERCE</option>
                    <option>COUNSELLING PSYCHOLOGY</option>
                    <option>DATA SCIENCE</option>
                    <option>ECONOMICS</option>
                    <option>ELECTRONICS</option>
                    <option>ENGLISH</option>
                    <option>FRENCH</option>
                    <option>INFORMATION TECHNOLOGY</option>
                    <option>HINDI</option>
                    <option>HISTORY</option>
                    <option>HUMAN EXCELLENCE</option>
                    <option>HUMAN RESOURCE MANAGEMENT</option>
                    <option>MATHEMATICS</option>
                    <option>PHYSICS</option>
                    <option>SANSKRIT</option>
                    <option>SOFTWARE DEVELOPMENT AND SYSTEM ADMINISTRATION</option>
                    <option>STATISTICS</option>
                    <option>TAMIL</option>
                    <option>VISCOM TECHNOLOGY</option>
                </datalist>
                <label class="lble">Amout</label><br>
                <input type="number" name="amount" class="inpt" placeholder="Enter Amount" required><br>
                <label class="lble">Password</label><br>
                <input name="password" type="password" class="inpt" placeholder="Enter Password" required><br>
                <div class="cntr">
                    <button name="submit" type="submit" class="sbmt">Submit</button>
                    <input type="button" class="sbmt" name="cancel" value="cancel"
                        onclick="showDashboard('alct_amt', 'dept', 'dashboard','chngpswrd')">
                </div>
            </form>
        </div>
    </div>




    <div id="dept" style="display: none;margin-top: 90px;">
        <h2 style="margin-left: 30px; position: absolute;top:100px;">&nbsp;&nbsp;Book Request | Department</h2>
        <table>
            <tr>
                <th>S.No</th>
                <th>Department</th>
                <th>Total Request</th>
                <th>Status</th>
                <th>Allocated Amount</th>
                <th>Balance Amount</th>
                <th>Action</th>
            </tr>
            <!--<button id="opendept" onclick="opendip()">-->

            <tr style="text-align: center;">
                <td>1</td>
                <td>MCA</td>
                <td>7</td>
                <td>Incomplete</td>
                <td>10000</td>
                <td>3000</td>
                <td><Button onclick="showorder('order')">Open
                        &nbsp;&nbsp;<i class="fa-solid fa-up-right-from-square"></i></Button></td>
            </tr>
        </table>
   


<!--MY CODE -->
<br><br>
<table>
                    <tr>
                        <th>S.No</th>
                        <th>Title of the Book</th>
                        <th>No of Copys</th>
                        <th>Price</th>
                        <th>Author</th>
                        <th>Edition</th>
                        <th>Action</th>
                    </tr>
                    

           

<?php
                $sno = 1;
                $bookrequest_query = "SELECT request_id, price, department, bookname, No_of_copies, author_Name, status from bookrequest";
                if($result=$conn->query($bookrequest_query))
                {
                if($result->num_rows)
                {
                while($row=$result->fetch_object())
                {
                    echo "<tr><td>$sno</td><td>$row->bookname</td><td>$row->No_of_copies</td><td>$row->price</td><td>$row->author_Name</td><td>6</td>";
                    echo "<td><button type='delete_book' name='delete_book' class='btn' onclick=''><i class='fa-solid fa-trash-can'></i>&nbsp;&nbsp;&nbsp;Delete</button></td></tr>";
                    $sno ++;
                }
                }
                }
    ?>
            
            
                    <tr>
                        <td colspan="7">
                            <button type="submit_order" name="submit_order" onclick="" class="btn"><i
                                    class="fa-solid fa-circle-check"></i>&nbsp;&nbsp;Submit</button>
                            <button onclick="showdashboard('order','neworder','dashboard','chngpswrd')" class="btn"><i
                                    class="fa-regular fa-circle-xmark"></i>&nbsp;&nbsp;Close</button>
                        </td>
                    </tr>
                </table>
            </div>

<!-- END OF MY CODE -->


    <div id="order" style="display: none;margin-top: 90px;">
        <h2 style="margin-left: 30px; position: absolute;top:100px;">&nbsp;&nbsp;Book Requests | Department | Order
        </h2>
        <Table>
            <tr>
                <th>Order No</th>
                <th>Order Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>1</td>
                <td>11/22/33</td>
                <td>Incomplete</td>
                <td>
                    <button><i class="fa-solid fa-arrow-up-from-bracket"></i>&nbsp;&nbsp;Upload Bill</button>
                    <button onclick="showbook('book')">Open&nbsp;&nbsp;<i
                            class="fa-solid fa-up-right-from-square"></i></button>
                </td>
            </tr>
            <tr>
                <td colspan="4"><button onclick="showdept('dept')"><i
                            class="fa-regular fa-circle-xmark"></i>&nbsp;&nbsp;Close</button></td>
            </tr>
        </Table>
    </div>


    <div id="book" style="display: none;margin-top: 90px;">
        <h2 style="margin-left: 30px; position: absolute;top:100px;">&nbsp;&nbsp;Book Requests | Department | Order |
            Books</h2>
        <table>
            <tr>
                <th>S.No</th>
                <th>Title of the Book</th>
                <th>No of Copys</th>
                <th>Price</th>
                <th>Author</th>
                <th>Edition</th>
                <th>Action</th>
                <!--<th><button id="upload" onclick="billupload()">Upload Bill</button></th>-->
            </tr>
            <tr>
                <td>1</td>
                <td>Java</td>
                <td>2</td>
                <td>350</td>
                <td>Balaguru</td>
                <td>6</td>
                <td><input type="checkbox" name="availblebook" title="Book Purchased" required></td>
            </tr>
            <tr>
                <td colspan="7">
                    <button onclick=""><i class="fa-solid fa-circle-check"></i>&nbsp;&nbsp;Submit</button>
                    <button onclick="showorder('order')"><i
                            class="fa-regular fa-circle-xmark"></i>&nbsp;&nbsp;Close</button>
                </td>
            </tr>
        </table>
    </div>

    <!--Manage Account Details-->

    <div id="chngpswrd" style="margin-top: 90px; display: none;">
        <form>
            <h2 style="margin-left: 30px; position: absolute;top:100px;">&nbsp;&nbsp;Manage My Account</h2>
            <div class="chngpswrd">
                <h4 style="border-left:4px solid blue;padding-left: 8px; margin-left: 10px;">Change Email</h4>
                <label class="lble">Enter E-Mail</label>
                <input type="email" class="inpt" name="email" placeholder="E-Mail" required><br>
                <label class="lble">Enter Password</label>
                <input type="email" class="inpt" name="password" placeholder="Password" required>
                <button class="sbmt cntr" type="submit">Update</button>
            </div>
        </form>


        <div class="chngpswrd">
            <form>
                <h4 style="border-left:4px solid blue;padding-left: 8px;margin-left: 10px;">Change Password</h4>
                <label class="lble">Enter Current Password</label>
                <input type="email" class="inpt" name="password" placeholder="Current password" required><br>
                <label class="lble">Enter New Password</label>
                <input type="email" class="inpt" name="password" placeholder="Password" required><br>
                <label class="lble">Confirm New Password</label>
                <input type="email" class="inpt" name="password" placeholder="Password" required><br>
                <button class="sbmt cntr" type="submit">Update</button>
            </form>
        </div>
    </div>







    <script>

        function openNav() {
            document.getElementById("mySidenav").style.width = "24%";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
        

    </script>
    <!--Div Navigation-->
    <script type="text/javascript">
        function showAclt_amt(alct_amt, dept, dashboard, chngpswrd) {
            document.getElementById(alct_amt).style.display = 'contents';
            document.getElementById(dept).style.display = 'none';
            document.getElementById(dashboard).style.display = 'none';
            document.getElementById(chngpswrd).style.display = 'none';
            closeNav(); closedept('dept'); closebook('book'); closeorder('order');
        }
        function showDashboard(alct_amt, dept, dashboard, chngpswrd) {
            document.getElementById(alct_amt).style.display = 'none';
            document.getElementById(dept).style.display = 'none';
            document.getElementById(dashboard).style.display = 'flex';
            document.getElementById(chngpswrd).style.display = 'none';
            closeNav(); closedept('dept'); closebook('book'); closeorder('order');
        }
        function showBook_req(alct_amt, dept, dashboard, chngpswrd) {
            document.getElementById(alct_amt).style.display = 'none';
            showdept('dept');
            document.getElementById(dashboard).style.display = 'none';
            document.getElementById(chngpswrd).style.display = 'none';
            closeNav();
        }
        function showchngpswrd(alct_amt, dept, dashboard, chngpswrd) {
            document.getElementById(alct_amt).style.display = 'none';
            document.getElementById(dept).style.display = 'none';
            document.getElementById(dashboard).style.display = 'none';
            document.getElementById(chngpswrd).style.display = 'block';
            closeNav(); closedept('dept'); closebook('book'); closeorder('order');
        }

        function hideDiv(toggle) {
            document.getElementById(toggle).style.display = 'none';
        }

    </script>

    <script type="text/javascript">
        function showdept(dept) {
            document.getElementById(dept).style.display = 'block';
            closebook('book');
            closeorder('order');
        }
        function showorder(order) {
            document.getElementById(order).style.display = 'block';
            closebook('book');
            closedept('dept');
        }
        function showbook(book) {
            document.getElementById(book).style.display = 'block';
            closeorder('order');
            closedept('dept');

        }
        function closebook(book) {
            document.getElementById(book).style.display = 'none';
        }
        function closeorder(order) {
            document.getElementById(order).style.display = 'none';
        }
        function closedept(dept) {
            document.getElementById(dept).style.display = 'none';
        }
    </script>


</body>

</html>



<?php
}
else {
  echo "<h1>Loading..Please Wait..!</h1>";
  echo "<script>alert('Please Login!')</script>";
  echo "<script>location.href='index.php'</script>";
}
?>