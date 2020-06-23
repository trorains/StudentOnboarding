<template>
<div>
     <header>
   <div
       class="ilabLogo" style="width=47.0px;">
       <img src="../assets/ilabLogo.png" width="170px;" style="height=108.0px;">
   </div>
   <div style="width:1200px">
    <nav id='socialLinks'>
        <li><a href="https://www.facebook.com/iLabAfricaStrathmore/?fref=ts"><img src="../assets/fbIcon.svg" width="23px" ></a></li>
        <li> <a href="https://www.instagram.com/ilabafrica/?hl=en"><img src="../assets/igIcon.svg" width="23px"></a></li>
        <li><a href="https://twitter.com/ilabafrica"><img src="../assets/twitterIcon.svg" width="23px"></a></li>
        <li><a href="https://www.linkedin.com/company/ilabafrica/"><img src="../assets/linkedinIcon.svg" width="23px"></a></li>
        <li><router-link to="/register"><button class="btnApply">Apply</button></router-link></li>
        <li><router-link to="/login"><button class="btnSignIn">Login</button></router-link></li>
      <!-- Add Youtube link -->
      </nav>
       <ul id='mainButtons'>
      <li><router-link to="/">Home</router-link></li>
      <li><router-link to="/about">About</router-link></li>
      <li>Departments</li>
      <li><router-link to="/courses">Courses</router-link></li>
      <li>Contact Us</li>
      <input type="textSearch" name="search" placeholder="Search...">
    </ul>
    </div>
  </header>
</div>
</template>

<style scoped>
body{
  display:flex;
  padding-top: 0px;
  margin-top: 0px;
}
header{
  display: flex;
}
.btnApply{
  font-family: 'Source Sans Pro', sans-serif;
  background-color:lightblue;
}
.btnApply:hover{
    /* transform: scale(1.1); */
  background-color:lightblue;
  border-radius: 7px;
  border-color: #494949 !important;
  transition: all 0.3s ease 0s;
}
.btnSignIn{
  font-family: 'Source Sans Pro', sans-serif;
  background-color:lightblue;

}
.btnSignIn:hover{
    /* transform: scale(1.1); */
  background-color:lightblue;
  border-radius: 7px;
  border-color: #494949 !important;
  transition: all 0.3s ease 0s;
}

#mainButtons {
  list-style: none;
  display:flex;
  justify-content: space-around;
  flex-flow: row wrap;
  background-color: #C4C4C4;
  padding:11px;
  margin:auto;
  width:100%;
  margin-right: 0;
}
.ilabLogo{
  padding-left:0;
  margin-top: 18px;
  margin-right: 10px;
  margin-left: 5px;
}
#socialLinks {
  list-style: none;
  display:flex;
  flex-flow: row wrap;
  background-color:#231D1D;
  padding:13px;
  padding-right: 10px;
  margin-right: 0px;
  justify-content:right;
  margin: auto;
  width:100%;
  margin-right: 0;
}
#socialLinks>li{
  margin-left: 80px;
}
</style>
