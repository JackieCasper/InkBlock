<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ink Block</title>
      
        <link rel="stylesheet" href="/InkBlock/css/bootstrap.min.css">
        <link rel="stylesheet" href="/InkBlock/css/bootstrap-theme.css">
        <link rel="stylesheet" href="/InkBlock/css/style.css">
        <link rel="stylesheet" href="/InkBlock/css/cart.css">
        <link rel="stylesheet" href="/InkBlock/font-awesome/css/font-awesome.min.css">
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>    
        <script src="/InkBlock/js/bootstrap.min.js"></script>
        <script src="/InkBlock/js/JS.js"></script>
        <script src="/InkBlock/js/cart.js"></script>
        <script src="https://use.typekit.net/gqu4epn.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
          <link rel="icon" type="image/png" href="/InkBlock/img/favicon/black-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="/InkBlock/img/favicon/black-16x16.png" sizes="16x16" />
          <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes">
    </head>
    <body>
          
        <div class="dropDownBuffer viewportHeight"></div>
        <div class="container-fluid">
            <div class="jumbotron hero viewportHeight" style="background-image: url(/InkBlock/img/cartHero.jpg)">

                    <h2 class="imgTitle hiddenTitle">
                        CHECKOUT
                    </h2> 

                    <h2 class="imgTitle">
                        CHECKOUT
                    </h2>   

            </div>
            <div class="container-fluid cartItems">
                
            </div>
            
            
            
            
            
            
            <div class="container formContainer">
                <hr class="formHR"><h4 class="formHead">ADDRESS INFORMATION</h4>
                <form class="form-horizontal checkoutForm">
                    <fieldset>
                        <!-- full-name input-->
                        <div class="control-group row">
                            <label class="control-label col-sm-4">Full Name</label>
                            <div class="controls col-sm-8">
                                <input id="full-name" name="full-name" type="text" class="formInput input-xlarge">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        
                        
                        
                        <!-- address-line1 input-->
                        <div class="control-group row">
                            <label class="control-label col-sm-4">Address Line 1</label>
                            <div class="controls col-sm-8">
                                <input id="address-line1" name="address-line1" type="text" class="formInput input-xlarge">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <!-- address-line2 input-->
                        <div class="control-group row">
                            <label class="control-label col-sm-4">Address Line 2</label>
                            <div class="controls col-sm-8">
                                <input id="address-line2" name="address-line2" type="text" class="formInput input-xlarge">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <!-- city input-->
                        <div class="control-group row">
                            <label class="control-label col-sm-4">City / Town</label>
                            <div class="controls col-sm-8">
                                <input id="city" name="city" type="text" class="input-xlarge formInput">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <!-- state select -->
                        <div class="control-group row dropRow">
                            <label class="control-label col-sm-4">State / Province / Region</label>
                            <div class="controls col-sm-8 dropdownContainer">
                                <div class="dropDown stateDrop" id="stateMenu">
                                    <p class="SelectedState"> </p> <i class="fa fa-caret-down dropCaret"></i>
                                </div>
                                <div class="listContainer dropdownList">
                                    <ul class="DropDown" id="stateDropdown">
                                        
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                        <!-- postal-code input-->
                        <div class="control-group row">
                            <label class="control-label col-sm-4">ZIP / POSTAL CODE</label>
                            <div class="controls col-sm-8">
                                <input id="postal-code" name="postal-code" type="text" class="formInput input-xlarge">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <!-- country select -->
                        <div class="control-group row dropRow">
                            <label class="control-label col-sm-4">COUNTRY</label>
                            <div class="controls col-sm-8 dropdownContainer">
                                <div class="dropDown countryDrop" id="countryMenu">
                                    <p class="SelectedCountry">TEST</p> <i class="fa fa-caret-down dropCaret"></i>
                                </div>
                                <div class="listContainer dropdownList">
                                    <ul class="DropDown" id="countryDropdown">
                                        
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                            <div class="control-group row">
                            <label class="control-label col-sm-4">PHONE NUMBER</label>
                            <div class="controls col-sm-8">
                                <input id="phone" name="phone" type="tel"  class="input-xlarge formInput">
                                <p class="help-block"></p>
                            </div>
                        </div>
                            <div class="control-group row last">
                            <label class="control-label col-sm-4">EMAIL</label>
                            <div class="controls col-sm-8">
                                <input id="email" name="email" type="email" class="input-xlarge formInput">
                                <p class="help-block"></p>
                            </div>
                        </div>
                    
                <hr class="formHR"><h4 class="formHead">CARD INFORMATION</h4>
                
                        <div class="control-group row first">
                            <label class="control-label col-sm-4">CARD NUMBER</label>
                            <div class="controls col-sm-8">
                                <input id="full-name" name="full-name" type="text" class="formInput input-xlarge">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group row">
                            <label class="control-label col-sm-4">NAME ON CARD</label>
                            <div class="controls col-sm-8">
                                <input id="full-name" name="full-name" type="text" class="formInput input-xlarge">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group row dropRow">
                            <label class="control-label col-sm-4">EXPIRATION DATE</label>
                            <div class="controls col-sm-8 dropdownContainer">
                                <div class="col-sm-6 dateSection">
                                    <div class="dropDown monthDrop">
                                        <p class="SelectedMonth">MONTH</p> <i class="fa fa-caret-down DropCaret"></i>
                                    </div>
                                    <div class="dropdownList">
                                        <ul class="DropDown" id="monthDropDown">
                                            <li class="dropdownItem" onclick="ChangeMonth(1)">1</li>
                                            <li class="dropdownItem" onclick="ChangeMonth(2)">2</li>
                                            <li class="dropdownItem" onclick="ChangeMonth(3)">3</li>
                                            <li class="dropdownItem" onclick="ChangeMonth(4)">4</li>
                                            <li class="dropdownItem" onclick="ChangeMonth(5)">5</li>
                                            <li class="dropdownItem" onclick="ChangeMonth(6)">6</li>
                                            <li class="dropdownItem" onclick="ChangeMonth(7)">7</li>
                                            <li class="dropdownItem" onclick="ChangeMonth(8)">8</li>
                                            <li class="dropdownItem" onclick="ChangeMonth(9)">9</li>
                                            <li class="dropdownItem" onclick="ChangeMonth(10)">10</li>
                                            <li class="dropdownItem" onclick="ChangeMonth(11)">11</li>
                                            <li class="dropdownItem" onclick="ChangeMonth(12)">12</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 dateSection">
                                    <div class="dropDown yearDrop">
                                        <p class="SelectedYear">YEAR</p> <i class="fa fa-caret-down DropCaret"></i>
                                    </div>
                                    <div class="dropdownList">
                                        <ul class="DropDown" id="yearDropdown">
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="control-group row">
                            <label class="control-label col-sm-4">SECURITY CODE</label>
                            <div class="controls col-sm-8">
                                <input id="full-name" name="full-name" type="text" class="formInput input-xlarge">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="checkout">
                            <button class="checkoutButton">CHECKOUT</button>
                        </div>
                    </fieldset>
                </form>
                
                
            </div>
            
            <div class="footer"></div>
        </div>
    </body>
</html>