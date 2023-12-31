<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <mata http-equiv="X-UA-Compatible" content="IEedge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>categories</title>
    <link rel="stylesheet" href="categories.css">
    <script src="./categories.js" defer></script>
</head>
<body>
   
<div class="container">
    <div class="box">
        <section class="box_upper">
          <h1>Categories</h1>
          <div class="balance">
            <h2>$0</h2>
              <h3>Your Balance</h3>
          </div>
        </section>

        <div class="transaction_container">
          <h3>Transaction</h3>
          <hr>


          <div class="transactions">
             <div class="transaction">
               <div class="left">
                  <p>Example Test</p>
                  <p>+ $200</p>
               </div>
               <div class="status credit">C</div>
             </div>
             <div class="transaction">
               <div class="left">
                  <p>Example Test</p>
                  <p>+ $200</p>
               </div>
               <div class="status debit">D</div>
             </div>
          </div>
        </div>
        <section class="transaction_form">
            <h3>Add Transaction</h3>
            <form>

            <div class="inputs">
                <div class="form_control">
                <label for="text">Text</label>
                <input placeholder="Enter Description" type="text" name="text" id="text">
                </div>

                <div class="form_control">
                <label for="amount">Amount</label>
                <input placeholder="Enter Amount"  type="number" name="amount" id="amount">
                </div>
                </div>

                <div class="buttons_container">
                    <button id="earnBtn">
                        <p>$0</p>
                        <p>Earnings</p>
                    </button>

                    <button id="expBtn">
                        <p>$0</p>
                        <p>Expense</p>
                    </button>
                    
                </div>
            </form>
        </section>
    </div>
</div>

</body>
</html>