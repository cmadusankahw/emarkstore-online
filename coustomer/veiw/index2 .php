<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Food Ordering</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

    <style>
        .item:hover {
            background-color: black;
            color: rgb(14, 12, 12);
        }
        
        .btn {
            color: hsl(0, 0%, 86%);
            background-color: hsl(0, 0%, 21%);
            border-radius: 3px;
        }
    </style>


</head>

<body>
    <!-- Navigation Bar begins -->

    <nav class="navbar" role="navigation" aria-label="main navigation" style="background-color: hsl(0, 0%, 29%);color:white " aria-label="main navigation;">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io">
                <img src="https://i.ibb.co/Gksqc2K/gamu.png" width="92" height="108">
            </a>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <!-- <div class="navbar-start">
            <a class="navbar-item item:hover btn" style="color: azure; ">
              Home
            </a>
      
            <a class="navbar-item item :hover btn" style="color: azure;">
              Documentation
            </a>
      
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link .item :hover btn" style="color: azure;">
                More
              </a>
      
              <div class="navbar-dropdown" style="background-color: hsl(0, 0%, 29%);">
                <a class="navbar-item .item:hover btn" style="color: azure;">
                  About
                </a>
                <a class="navbar-item .item :hover" style="color: azure;">
                  Jobs
                </a>
                <a class="navbar-item" style="color: azure;">
                  Contact
                </a>
                <hr class="navbar-divider" style="color: azure;">
                <a class="navbar-item" style="color: aliceblue;">
                  Report an issue
                </a>
              </div>
            </div>
          </div> -->

            <div class="navbar-end">
                <div class="navbar-item">

                    <div class="buttons">

                        <a class="button is-primary">
                            <strong>View Order</strong>
                        </a>
                        <a class="button is-light">
                  Register
                </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Nav Bar ends -->
    <section class="section">
        <div class="container">

            <!-- Form Starts -->
            <div class="box">
                <div class="field">
                    <label class="label">Shop Name</label>
                    <div class="control">
                        <div class="select" style="width: 200%;">
                            <select style="width: 200%;">
                  <option>FoodCity Kurunegala (Dabulla rd)</option>
                  <option>FoodCity Kurunegala (Negambo rd)</option>
                  <option>Arpico Kurunegala (Colombo rd)</option>

                </select>
                        </div>
                    </div><br>


                </div>




                <table style="width: 140%;">
                    <tbody>
                        <td>
                            <div class="field">
                                <label class="label">Item 1 Name</label>
                                <div class="control">
                                    <div class="select" style="width: 200%;">
                                        <select style="width: 200%;">
                              <option>Parippu (1kg packets)</option>
                              <option>Parippu loose (g) </option>
                            </select>
                                    </div>
                                </div>
                            </div>

                        </td>
                        <td>
                            <div class="field" style="width: 20%;">
                                <label class="label"> Quantity</label>
                                <div class="control">
                                    <div class="select" style="width: 20%;">
                                        <select style="width: 20%;">
                            <option>100g</option>
                            <option>250g/(1/4) </option>
                            <option>500g/(1/2)</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>

                          </select>
                                    </div>
                                </div>
                        </td>
                    </tbody>
                </table><br>

                <table style="width: 163%;">
                    <tbody>
                        <td>
                            <div class="field">
                                <label class="label">Item 2 Name</label>
                                <div class="control">
                                    <div class="select" style="width: 200%;">
                                        <select style="width: 200%;">
                            <option>Parippu (1kg packets)</option>
                            <option>Parippu loose (g) </option>
                          </select>
                                    </div>
                                </div>
                            </div>

                        </td>
                        <td>
                            <div class="field" style="width: 20%;">
                                <label class="label"> Quantity</label>
                                <div class="control">
                                    <input class="input" type="text" placeholder="Text input">
                                </div>
                            </div>
                        </td>
                    </tbody>
                </table><br>

                <table style="width: 163%;">
                    <tbody>
                        <td>
                            <div class="field">
                                <label class="label">Item 3 Name</label>
                                <div class="control">
                                    <div class="select" style="width: 200%;">
                                        <select style="width: 200%;">
                            <option>Parippu (1kg packets)</option>
                            <option>Parippu loose (g) </option>
                          </select>
                                    </div>
                                </div>
                            </div>

                        </td>
                        <td>
                            <div class="field" style="width: 20%;">
                                <label class="label"> Quantity</label>
                                <div class="control">
                                    <input class="input" type="text" placeholder="Text input">
                                </div>
                            </div>
                        </td>
                    </tbody>
                </table><br>

                <table style="width: 163%;" id="frm">
                    <tbody>
                        <td>
                            <div class="field">
                                <label class="label">Item 4 Name</label>
                                <div class="control">
                                    <div class="select" style="width: 200%;">
                                        <select style="width: 200%;">
                            <option>Parippu (1kg packets)</option>
                            <option>Parippu loose (g) </option>
                          </select>
                                    </div>
                                </div>
                            </div>

                        </td>
                        <td>
                            <div class="field" style="width: 20%;">
                                <label class="label"> Quantity</label>
                                <div class="control">
                                    <input class="input" type="text" placeholder="Text input">
                                </div>
                            </div>
                        </td>
                    </tbody>
                </table><br>

                <table style="width: 163%;" id="frm">
                    <tbody>
                        <td>
                            <div class="field">
                                <label class="label">Item 5 Name</label>
                                <div class="control">
                                    <div class="select" style="width: 200%;">
                                        <select style="width: 200%;">
                          <option>Parippu (1kg packets)</option>
                          <option>Parippu loose (g) </option>
                        </select>
                                    </div>
                                </div>
                            </div>

                        </td>
                        <td>
                            <div class="field" style="width: 20%;">
                                <label class="label"> Quantity</label>
                                <div class="control">
                                    <input class="input" type="text" placeholder="Text input">
                                </div>
                            </div>
                        </td>
                    </tbody>
                </table><br>


                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link">Submit</button>
                    </div>
                    <div class="control">
                        <button class="button is-link is-light">Cancel</button>
                    </div>
                </div>
                </div>

                <!-- Form Ends -->
            </div>
    </section>
</body>
<script>
    var count = 4;

    function createSelectFeild() {
        //alert();
        count++;
        document.getElementById('frm').innerHTML += `
            <br><table style="width: 163%;">
                    <tbody>
                        <td>
                        <div class="field" >
                            <label class="label">Item ` + count + ` Name</label>
                            <div class="control" >
                                <div class="select" style="width: 200%;" >
                                <select style="width: 200%;" id="` + count + `">
                                    <option>Parippu (1kg packets)</option>
                                    <option>Parippu loose (g) </option>
                                </select>
                                </div>
                            </div>
                            </div>
                        
                        </td>
                        <td>
                        <div class="field" style="width: 20%;" id="` + count + `">
                            <label class="label"> Quantity</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Text input">
                            </div>
                            </div>
                        </td>
                    </tbody>
                </table>`;
    }
</script>

</html>