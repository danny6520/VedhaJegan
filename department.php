<?php session_start(); 
$username = $_SESSION['login_inv_admin'];
include('db_connection.php');
if(	$_SESSION['login_inv_department'] == 'department')
{
    $sql = "SELECT allocated_amount FROM budget where department_name= '$username' ";
                           $result = $conn->query($sql);
                           if ($result->num_rows > 0) {
                           while($row = $result->fetch_assoc()) {
                           $amount=  $row["allocated_amount"];
                           }
                           } else {
                           echo "0 results";
                           }  
    $sql1 = "SELECT balance_amount FROM budget where department_name= '$username' ";
                           $result = $conn->query($sql1);

                           if ($result->num_rows > 0) {
                           while($row = $result->fetch_assoc()) {
                           $balance=  $row["balance_amount"];
                           }
                           } else {
                           echo "0 results";
                           }  
?>

<html>

<head>
    <title>Department</title>
    <link rel="stylesheet" href="dept.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://kit.fontawesome.com/438020997e.js" crossorigin="anonymous"></script>
</head>

<body>

    <header>
        <div id="main">
            <span onclick="openNav()">&#9776;&nbsp;&nbsp;&nbsp;&nbsp;Library
                Management - Department</span></button>
                
        </div>
    </header>

    <form action="logout_process.php">
        <button type="logout" class="logoutbtn" name="user" id="user"><i
                class="fa-solid fa-right-from-bracket"></i>&nbsp;&nbsp;&nbsp;Logout</button>
    </form>


    <!--Side Details-->




    <!--Side Navigation-->



    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">X</a>
        <label class="navhed">Department</label><br><br>
        <table>
            <tr>
                <td><i class="fa-solid fa-grip"></i></td>
                <td><input type="button" name="dashboard" class="label" value="Dashboard"
                        onclick="showdashboard('order','neworder','dashboard','chngpswrd')"></td>
            </tr>
            <tr>
                <td><i class="fa-solid fa-cart-shopping"></i></td>
                <td><input type="button" name="alct_amt" class="label" value="My Orders"
                        onclick="showorder('order','neworder','dashboard','chngpswrd')"></td>
            </tr>
            <tr>
                <td><i class="fa-solid fa-cart-plus"></i></td>
                <td><input type="button" name="book_req" class="label" value="New Order"
                        onclick="showneworder('order','neworder','dashboard','chngpswrd')"></td>
            </tr>
            <tr>
                <td><i class="fa-solid fa-key"></i></td>
                <td><input type="button" name="chngpswrd" class="label" value="My Account"
                        onclick="showchngpswrd('order','neworder','dashboard','chngpswrd')"></td>
            </tr>
        </table>


    </div>

    <!--Dashboard-->


    <div id="dashboard" class="dashboard">
        <h2 style="margin-left: 30px; position: absolute;top:100px;">Dashboard   - <?php  echo"$username"; ?></h2>
        
        <div class="card">
            <h3>123</h3>
            <p class="caption">Total Orders</p>
        </div>
        <div class="card">
            <h3>123</h3>
            <p class="caption">Orders Received</p>
        </div>
        <div class="card">
            <h3>123</h3>
            <p class="caption">Allocated Amount</p>
        </div>
        <div class="card">
            <h3>123</h3>
            <p class="caption">Balance Amount</p>
        </div>
        <div class="card">
            <h3>123</h3>
            <p class="caption">Total Books</p>
        </div>
    </div>


    <!--MY ORDER-->


    <div id="order" style="display: none; margin-top: 90px;">
        <h2 style="margin-left: 30px; position: absolute;top:100px;">My Orders</h2>
        <button class="btn" onclick="showordertable1('ordertable1','ordertable2')"><i class="fa-solid fa-list-ul"></i>&nbsp;&nbsp;&nbsp;Orders Bending</button>
        <button class="btn" onclick="showordertable2('ordertable1','ordertable2')"><i class="fa-regular fa-circle-check"></i>&nbsp;&nbsp;&nbsp;Orders Completed</button>
        <button class="btn" onclick="showneworder('order','neworder','dashboard','chngpswrd')"><i class="fa-solid fa-circle-plus"></i>&nbsp;&nbsp;&nbsp;New Order</button>


        <!--Order Sent By Department-->
        <div id="ordertable1">
            <button class="close" onclick="showdashboard('order','neworder','dashboard','chngpswrd')"><i
                    class="fa-solid fa-circle-xmark"></i></button>
            <table>
                <caption>Orders Sent</caption>
                <tr>
                    <th>S.No</th>
                    <th>Date</th>
                    <th>Books Count</th>
                    <th>Total Price</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>11/22/33</td>
                    <td>10</td>
                    <td>4000</td>
                    <td><button class="btn" onclick="showbooksbmt('booksbmt','bookrec','order')"><i
                                class="fa-solid fa-up-right-from-square"></i>&nbsp;&nbsp;&nbsp;Open</button>
                    </td>
                </tr>
            </table>
        </div>
        <!--Orders Received From Admin-->

        <div id="ordertable2" style="display: none;">
            <button class="close" onclick="showdashboard('order','neworder','dashboard','chngpswrd')"><i
                    class="fa-solid fa-circle-xmark"></i></button>

            <table>
                <caption>Orders Received</caption>
                <tr>
                    <th>S.No</th>
                    <th>Date</th>
                    <th>Books Count</th>
                    <th>Total Price</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>11/22/33</td>
                    <td>10</td>
                    <td>4000</td>
                    <td><button class="btn"><i class="fa-sharp fa-solid fa-download"></i>&nbsp;&nbsp;Download
                            Bill</button>
                        <button class="btn"><i class="fa-solid fa-eye"></i>&nbsp;&nbsp;Preview Bill</button>
                        <button class="btn" onclick="showbooksbmt('booksbmt','bookrec','order')"><i
                                class="fa-solid fa-up-right-from-square"></i>&nbsp;&nbsp;&nbsp;Open</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <!--Ordered Books-->
    <div id="booksbmt" style="display: none; margin-top: 90px;">
        <button class="close" onclick="showorder('order','neworder','dashboard','chngpswrd')"><i
                class="fa-solid fa-circle-xmark"></i></button>
        <table>
            <caption>Book Order Submitted</caption>
            <tr>
                <th>S.No</th>
                <th>Title of the Book</th>
                <th>No of Copys</th>
                <th>Price</th>
                <th>Author</th>
                <th>Edition</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Java</td>
                <td>2</td>
                <td>350</td>
                <td>Balaguru</td>
                <td>6</td>
            </tr>
        </table>
    </div>

    <!--Books Received From Admin-->
    <div id="bookrec" style="display: none; margin-top: 90px;">
        <button class="close" onclick="showorder('order','neworder','dashboard','chngpswrd')"><i
                class="fa-solid fa-circle-xmark"></i></button>
        <table>
            <caption>Books Received</caption>
            <tr>
                <th>S.No</th>
                <th>Title of the Book</th>
                <th>No of Copys</th>
                <th>Price</th>
                <th>Author</th>
                <th>Edition</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Java</td>
                <td>2</td>
                <td>350</td>
                <td>Balaguru</td>
                <td>6</td>
            </tr>
        </table>
    </div>



    <!--NEW ORDER-->

    <div id="neworder" style="display: none; margin-top: 90px;">
        <h2 style="margin-left: 40px; position: absolute;top:110px;">New Order</h2>
        <div style="margin-top: 90px;">
            <div style="display: flex; flex-direction: row; margin-left: 40px;">
                <div class="bookform" style="margin-right: 3%">
                    <form action="department_process.php" method="POST">
                        <h4>Enter Book Details</h4>
                        <label class="lble">Name of the book</label><br>
                        <input type="text" name="book" class="inpt" placeholder="Book Name" required><br>
                        <hr>
                        <label class="lble">Author</label><br>
                        <input type="text" name="author" class="inpt" placeholder="Author Name" required><br>
                        <hr>
                        <label class="lble">Number Of Copies</label><br>
                        <input type="number" name="yop" class="inpt" value="1" placeholder="Enter Number" required><br>
                        <hr>
                        <label class="lble">Edition</label><br>
                        <input type="text" name="edition" class="inpt" placeholder="Type here" required><br>
                        <hr>
                        <label class="lble">Price</label><br>
                        <input type="number" name="price" class="inpt" placeholder="Price of the Book" required><br>
                        <button type="submit" name="submit" value="ADD BOOK" class="sbmt">ADD BOOK</button>
                    </form>
                </div>

                <div style="display: flex;flex-direction: column;">
                    <div class="absltdiv" style="display: none;" id="allocated">
                        <p>ALLOCATED AMOUNT</p>
                        <hr>
                        <p id="allocated_amount" style="font-size: 20px;">
                           <?php echo"$amount"; ?>
                        </p>
                    </div>
                    <div class="absltdiv" style="display: none;" id="balance">
                        <p>BALANCE AMOUNT</p>
                        <hr>
                        <p id="balance_amount" style="font-size:20px;">
                             <?php echo"$balance"; ?>
                        </p>
                    </div>
                </div>

            </div>


            <!--Book Table-->
<!-- MY CODE --> 
            <div>
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
<!--
            <div>
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
                    <tr>
                        <td>1</td>
                        <td>Java</td>
                        <td>2</td>
                        <td>350</td>
                        <td>Balaguru</td>
                        <td>6</td>
                        <td><button type="delete_book" name="delete_book" class="btn" onclick=""><i
                                    class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;&nbsp;Delete</button></td>
                    </tr>
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
                        -->
        </div>

    </div>


    <!--Change Password-->


    <div id="chngpswrd" style="display: none; margin-top: 90px;">
        <h2 style="margin-left: 30px; position: absolute;top:100px;">Manage Account</h2>
        <div class="bookform">
            <form>
                <div class="chngpswrd">
                    <h4 style="border-left:4px solid blue;padding-left: 8px; margin-left: 10px;">Change Email</h4>
                    <label class="lble">Enter Current E-Mail</label>
                    <input type="email" class="inpt" name="email" placeholder="Current Mail Address" required><br>
                    <label class="lble">Enter New E-Mail</label>
                    <input type="email" class="inpt" name="email" placeholder="New Mail Address" required><br>
                    <label class="lble">Enter Password</label>
                    <input type="email" class="inpt" name="password" placeholder="Password" required>
                    <button class="sbmt cntr" type="submit">Update</button>
                </div>
            </form>
        </div>
        <div class="bookform">
            <form>
                <h4 style="border-left:4px solid blue;padding-left: 8px; margin-left: 10px;">Change Password</h4>
                <label class="lble">Enter Your Current Password</label>
                <input type="password" class="inpt" name="password" required placeholder="Password"><br>
                <label class="lble">Enter New Password</label>
                <input type="password" class="inpt" name="password" required placeholder="Type New Password"><br>
                <label class="lble">Confirm New Password</label>
                <input type="password" class="inpt" name="password" required placeholder="Type New Password">
                <button class="sbmt" type="submit">Update</button>
                <input type="button" class="sbmt" style="margin-left: 20px;" value="Cancel"
                    onclick="showdashboard('order','neworder','dashboard','chngpswrd')">
            </form>
        </div>
    </div>






    <script type="text/javascript">
        function showsidedetails(allocated, balance) {
            document.getElementById(allocated).style.display = 'block';
            document.getElementById(balance).style.display = 'block';
        }
        function hidesidedetails(allocated, balance) {
            document.getElementById(allocated).style.display = 'none';
            document.getElementById(balance).style.display = 'none';
        }
    </script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

    <!--Side Nav-->
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
        function showdashboard(order, neworder, dashboard, chngpswrd) {
            document.getElementById(dashboard).style.display = 'flex';
            document.getElementById(order).style.display = 'none';
            document.getElementById(neworder).style.display = 'none';
            document.getElementById(chngpswrd).style.display = 'none';
            hidesidedetails('allocated', 'balance');
            hidebookdetail('booksbmt', 'bookrec');
            closeNav();
        }
        function showorder(order, neworder, dashboard, chngpswrd) {
            document.getElementById(dashboard).style.display = 'none';
            document.getElementById(order).style.display = 'block';
            document.getElementById(neworder).style.display = 'none';
            document.getElementById(chngpswrd).style.display = 'none';
            hidesidedetails('allocated', 'balance');
            hidebookdetail('booksbmt', 'bookrec');
            closeNav();
        }
        function showneworder(order, neworder, dashboard, chngpswrd) {
            document.getElementById(dashboard).style.display = 'none';
            document.getElementById(order).style.display = 'none';
            document.getElementById(neworder).style.display = 'block';
            document.getElementById(chngpswrd).style.display = 'none';
            showsidedetails('allocated', 'balance');
            hidebookdetail('booksbmt', 'bookrec');
            closeNav();
        }
        function showchngpswrd(order, neworder, dashboard, chngpswrd) {
            document.getElementById(dashboard).style.display = 'none';
            document.getElementById(order).style.display = 'none';
            document.getElementById(neworder).style.display = 'none';
            document.getElementById(chngpswrd).style.display = 'block';
            hidesidedetails('allocated', 'balance');
            hidebookdetail('booksbmt', 'bookrec');
            closeNav();
        }
        function hideDiv(toggle) {
            document.getElementById(toggle).style.display = 'none';
            showDashboard('alct_amt', 'book_req', 'acpt_req', 'upld_bil', 'dashboard');
        }
        function showbooksbmt(booksbmt, bookrec, order) {
            document.getElementById(booksbmt).style.display = 'block';
            document.getElementById(bookrec).style.display = 'none';
            document.getElementById(order).style.display = 'none';
        }
        function showbookrec(booksbmt, bookrec, order) {
            document.getElementById(bookrec).style.display = 'block';
            document.getElementById(booksbmt).style.display = 'none';
            document.getElementById(order).style.display = 'none';
        }
        function hidebookdetail(booksbmt, bookrec) {
            document.getElementById(bookrec).style.display = 'none';
            document.getElementById(booksbmt).style.display = 'none';
        }
        function showordertable1(ordertable1, ordertable2) {
            document.getElementById(ordertable1).style.display = 'block';
            document.getElementById(ordertable2).style.display = 'none';
        }
        function showordertable2(ordertable1, ordertable2) {
            document.getElementById(ordertable1).style.display = 'none';
            document.getElementById(ordertable2).style.display = 'block';
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