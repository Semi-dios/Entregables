<template>
    <div class="container-fluid pt-5 px-3">
        <div class="row">
            <div class="col-sm-12">
               <div class="container">
                    <div class="panel Curriculum">
                       <div class="panel--header ">
                          <div class="content-img">
                                <picture>
                                    <img src="/images/faceUser.jpg" alt="">
                                </picture>
                          </div>
                            <div class="content-name">
                                <h2>SERGIO <span class="text-primary">PENAGOS</span></h2>

                                <h6 class="float-right">WEB DEVELOPER</h6>
                            </div>

                       </div>
                       <div class="panel--body">
                           <div class="row">
                               <div class="col-sm-12 col-lg-4 ">
                                   <div class="row">
                                       <div class="col-sm-12 mb-4">
                                           <div class="About-me">
                                               <h6 class="text-orange">ABOUT ME</h6>
                                               <p>Currently a student in analysis of information system knowledge in development with programming languages such as PHP, Javascript and frameworks as Laravel, Vue js, design of use cases, experience in MVC development</p>
                                           </div>
                                       </div>
                                       <div class="col-sm-12 mb-4">
                                           <div class="p-skills">
                                                <h6 class="text-orange">PERSONAL SKILS</h6>
                                                <ul class="list-style-none ul-p-skills">
                                                    <li  v-for="item of personalSkill" :key="item">{{item}}<span></span></li>
                                                </ul>
                                           </div>
                                       </div>
                                       <div class="col-sm-12 mb-4">
                                           <div class="contact">
                                                <h6 class="text-orange">CONTACT</h6>
                                                <ul class="list-group border-0 list-style-none ul-contact">
                                                    <li class="list-group-item custom-list-group">
                                                        <i class="fab fa-google"></i>
                                                        <br/>
                                                        <span>tipouno@misena.edu.co</span>
                                                    </li>
                                                    <li class="list-group-item custom-list-group">
                                                        <i class="fab fa-whatsapp"></i>
                                                        <br/>
                                                        <span>+57 321 962 9576</span>
                                                    </li>
                                                </ul>
                                           </div>
                                       </div>
                                       <div class="col-sm-12 mb-4">
                                           <div class="other">
                                                <h6 class="text-orange">OTHER</h6>
                                                  <ul class="list-group border-0 list-style-none ul-other">
                                                    <li class="list-group-item custom-list-group">
                                                        <i class="fab fa-linkedin-in"></i>
                                                          <br/>
                                                        <a href="https://www.linkedin.com/in/sergio-penagos-bb06191a7/">sergio-penagos-bb06191a7</a>
                                                    </li>
                                                    <li class="list-group-item custom-list-group">
                                                        <i class="fab fa-github"></i>
                                                          <br/>
                                                        <a href="https://github.com/Semi-dios">Semi-dios</a>
                                                    </li>
                                                </ul>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-sm-12 col-lg-8">
                                    <div class="row">
                                       <div class="col-sm-12">
                                           <div class="work-experence">
                                               <h6 class="text-orange">WORK EXPERIENCE</h6>
                                                <div class="desc">
                                                    <ul>
                                                        <li>
                                                            <div class="msg-1 text-orange ">Present |  Web Developer</div>
                                                            <div class="msg-2 text-purple">Vass Solution</div>
                                                            <div class="msg-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid saepe unde rem nostrum eveniet odit, minima autem aut numquam? In voluptas perspiciatis aliquid ipsam id excepturi et nemo pariatur velit?</div>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <div class="msg-1 text-orange">2021-March - 2021-Jun  | Web Developer</div>
                                                            <div class="msg-2 text-purple">Dolphin Enginering</div>
                                                            <div class="msg-3">1.Lifting requirements, create custom template using css(sass), package handling by npm, development in .net, testing.</div>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <div class="msg-1 text-orange">2019-2021 |  Web Developer</div>
                                                            <div class="msg-2 text-purple">Intevo Sas</div>
                                                            <div class="msg-3">1.Create custom template using css(sass), package handling by npm and composer, development in Laravel 7 and Vuejs, testing.</div>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <div class="msg-1 text-orange">2019-April - 2019-November | Support It</div>
                                                            <div class="msg-2 text-purple">Soulmedical Sas </div>
                                                            <div class="msg-3">1.Development in Php, Css , Html , JavScript and Mysql 2.Testing</div>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <div class="msg-1 text-orange">2017-2018 | Web Developer </div>
                                                            <div class="msg-2 text-purple"> Conextravel</div>
                                                            <div class="msg-3">1. create custom template using css3 and html, package handling by npm and composer.</div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                       </div>
                                       <div class="col-sm-12">
                                             <div class="work-experence">
                                               <h6 class="text-orange">EDUCATION</h6>
                                                    <ul>
                                                        <li>
                                                            <div class="msg-1">2019 | Technical in software development </div>
                                                            <div class="msg-2 text-purple"> SENA</div>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <div class="msg-1"> Present | Technology analysis and development of information Systems  </div>
                                                            <div class="msg-2 text-purple"> SENA</div>
                                                        </li>
                                                    </ul>
                                            </div>
                                       </div>
                                       <div class="col-sm-12">
                                            <div class="prof-skill">
                                                <h6 class="text-orange">PROFESSIONAL SKILLS</h6>
                                                <ul class="list-style-none ul-prof-skill">
                                                     <li  v-for="item of profSkill" :key="item">{{item}}<span></span></li>
                                                </ul>
                                           </div>
                                       </div>

                                   </div>
                               </div>
                           </div>
                       </div>
                </div>
               </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  data() {
    return {
      personalSkill: ["TEAMWORK", "CREATIVITY", "ORGANIZATION"],
      profSkill: [
        "AWS",
        "REACT",
        "JAVA",
        "LARAVEL",
        "GIT",
        "HTML",
        "SASS",
        "VUE",
        "JAVASCRIPT",
      ],
    };
  },
};
</script>

<style>
</style>
