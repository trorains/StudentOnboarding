<template>
       <div class="footer">
  <footer>
    <div class="footerContact">
        <img src="../assets/ilabLogo.png" width="250px;" style="padding-bottom:15px;" >
          <h3 style="font-size: 25px;">Contact Information</h3>
            <p><img src="@/assets/phone.png" style="width:23px;"> +254 703 034616</p>
            <p><img src="@/assets/email.png" style="width:23px;"> ilabafrica@strathmore.edu</p>
            <p><img src="@/assets/address.png" style="width:23px;"> P.O.Box 59857,00200</p>
    </div>
  </footer>

   <div class="links1" >
        <h3 style="width:165px; font-size: 25px;">Study at iLab</h3>
          <p>Departments</p>
          <p>Courses</p>
          <p><router-link to="/register">Apply</router-link></p>
      </div>
    <div class="links2">
        <h3 style="width:195px; font-size: 25px;">Important Links</h3>
      </div>

    <div class="links3">
        <h3 style="font-size: 25px;">Departments</h3>
          <p>Cyber Security</p>
          <p>Data Science</p>
          <p>e-Health</p>
          <p>Digital Learning</p>
          <p>Internet of Things</p>
          <p>Outsourcing and Consulting</p>
      </div>
</div>
</template>

<style scoped>
.footer{
  flex-flow: row-wrap;
  margin-top: 750px;
  background-color: lightblue  ;
  display: flex;
  margin-left: 0px;
}

.links1{
  padding-top: 10px;
  margin-right: 100px;
  margin-left: 0px;
  text-align: center;
}
.links2{
  padding-top: 10px;
  margin-right: 100px;
  text-align: center;
}
.links3{
  padding-top: 10px;
  text-align: center;

}
.footerContact{
  margin-top: 35px;
  margin-right:200px;
  align-content: left;
  float:left;
  margin-left: 10px;
  text-align: center;
}
</style>
