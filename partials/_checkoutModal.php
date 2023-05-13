<!-- Checkout Modal -->
<div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="checkoutModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="checkoutModal">Enter Your Credit/Debit Card Details :</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="partials/_manageCart.php" method="post">
                <div class="form-group">
                    <b><label for="Card Number">Card Number:</label></b>
                    <input class="form-control" id="C_number" name="C_Number" placeholder="Card Number" type="text" pattern="[0-9]+" required minlength="16" maxlength="16">
                </div>
                <div class="form-group">
                    <b><label for="Card Holder Name">Card Holder Name:</label></b>
                    <input class="form-control" id="C_name" name="C_name" pattern="^[a-zA-Z]+$" placeholder="Card Holder Name" type="text" required minlength="1" maxlength="50">
                </div>
                <div class="form-group">
                    <b><label for="Expire Date">Expire Date:</label></b>
<br>
                    <b><label for="month">Month:</label></b>
                    <select limit="4" name="c_month">
          <option value="january">January</option>
          <option value="february">February</option>
          <option value="march">March</option>
          <option value="april">April</option>
          <option value="may">May</option>
          <option value="june">June</option>
          <option value="july">July</option>
          <option value="august">August</option>
          <option value="september">September</option>
          <option value="october">October</option>
          <option value="november">November</option>
          <option value="december">December</option>
                    <select>
&nbsp;
                    <b><label for="Year" limit="4">Year:</label></b>
                    <select name ="c_year">
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                        <option value="2031">2031</option>
                        
                    <select>
                </div>
                <div class="form-group">
                    <b><label for="CVC">CVC:</label></b>
                    <input class="form-control" id="CVC" placeholder="CVC" name="address" type="text" pattern="[0-9]+" required minlength="3" maxlength="3" width="10%">
                </div>



                
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <input type="hidden" name="amount" value="<?php echo $totalPrice ?>">
                    <button type="submit" name="checkout" class="btn btn-success">Proceed Order</button>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>