<style>
    /* Style for the main container */
.data {
  display: block;
  margin: 20px;
  padding: 20px;
  background-color: #f4f4f4;
  border: 1px solid #ddd;
  border-radius: 5px;
}

/* Style for the labels */
label {
  font-weight: bold;
  margin-right: 10px;
}

/* Style for input fields */
input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}

/* Style for the "Want to add password" text */
.pass {
  margin-top: 10px;
}

/* Style for the slide toggle switch */
.mat-slide-toggle {
  margin-left: 10px;
}

/* Style for the submit button */
.but {
  background-color: #007bff;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

/* Style for the submit button on hover */
.but:hover {
  background-color: #0056b3;
}

</style>


<div *ngSwitchCase="'account_info'" class="data">
          <div class="main">
            <div class="in">
              <label for="na">Account Holder Name</label>
              <input type="text" placeholder="Name" [(ngModel)]="piname" id="na">

            </div>
            <div class="in">
              <label for="ac">Account No</label>
              <input type="text" placeholder="Account No" [(ngModel)]="piAcno" id="ac">

            </div>
            <div class="in">
              <label for="ifc">IFSC</label>
              <input type="text" placeholder="IFSC CODE" [(ngModel)]="pifcfsc" id="ifc">

            </div>
            <div class="pass">
              <span>Want to add password</span>
              <mat-slide-toggle [(ngModel)]="x"></mat-slide-toggle>
            </div>

            <div *ngIf="x" class="in">
              <label for="Password">Password</label>
              <input type="password" placeholder="Password" id="password" [(ngModel)]="password">
            </div>
            <div><br><br>
            <center>
             <a href="generate.php" class="but" >Next</a>
            </div>
            </center>
          </div>
        </div>
