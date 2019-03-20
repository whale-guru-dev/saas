<?php

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('career_jobs')->delete();
        
        \DB::table('career_jobs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Fullstack PHP Developer',
                'orderby' => 1,
                'goto' => 'https://laravel-bap.com/only-for-1-week-special-price-15-off/',
                'description' => '<p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://media3.giphy.com/media/xT8qBsOjMOcdeGJIU8/200w.gif?cid=540216295ba247cd725a4a786bbd842f" width="422" height="175" /></p>
<p><span style="color: #000000; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 13.3333px;"><strong>Responsibilities</strong>&nbsp;</span><br style="-webkit-font-smoothing: antialiased; box-sizing: border-box; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; color: #000000; font-size: 13.3333px;" /><br style="-webkit-font-smoothing: antialiased; box-sizing: border-box; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; color: #000000; font-size: 13.3333px;" /></p>
<ul style="-webkit-font-smoothing: antialiased; box-sizing: border-box; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; color: #000000; font-size: 13.3333px;">
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Write client facing tools in Javascript/Typescript using ReactJS with server-side rendering</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Implement backend apis and services in Scala</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Improve our content management system (Drupal)</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Deploy frequently into our Docker Swarm cluster</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Consistently deliver solid and maintainable software and take operational ownership</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Spot issues and suggest/implement fixes even at the architecture level</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Enforce processes, dev standards, and mentor engineers</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Reduce complexity and take the lead in initiatives to drive them to completion</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Does some project management and synthesizes requirements</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Stays abreast in new technologies and trends and knows how to apply them</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Owns a functional area and body of software</li>
</ul>
<p><span style="color: #000000; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 13.3333px;"><strong>Qualifications</strong>&nbsp;</span><br style="-webkit-font-smoothing: antialiased; box-sizing: border-box; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; color: #000000; font-size: 13.3333px;" /><br style="-webkit-font-smoothing: antialiased; box-sizing: border-box; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; color: #000000; font-size: 13.3333px;" /></p>
<ul style="-webkit-font-smoothing: antialiased; box-sizing: border-box; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; color: #000000; font-size: 13.3333px;">
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">2+ years of relevant work experience</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Proficiency in Javascript, PHP, Scala and/or other programming languages</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Experience implementing, improving, and enforcing development processes</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Excellent attention to detail, and written and verbal communication skills</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Takes initiative to solve problems and is good with uncertainty and risk</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">A self-starter with a strong work ethic and constant drive for improvement</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Collaborative team player with ability to work independently and manage multiple projects/tasks</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Can give (and receive) feedback and enjoys providing mentorship</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Track record of delivering projects to clients</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Ability to write concisely and clearly in English</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Bonus: Demonstrated experience or interest in personal finance</li>
</ul>
<p><span style="color: #000000; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 13.3333px;">The Fun Stuff&nbsp;</span><br style="-webkit-font-smoothing: antialiased; box-sizing: border-box; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; color: #000000; font-size: 13.3333px;" /><br style="-webkit-font-smoothing: antialiased; box-sizing: border-box; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; color: #000000; font-size: 13.3333px;" /></p>
<ul style="-webkit-font-smoothing: antialiased; box-sizing: border-box; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; color: #000000; font-size: 13.3333px;">
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">This is an opportunity to join a financially solid, fast-paced and ambitious Fintech Startup</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">We provide competitive salaries and generous benefits including daily catered lunch, health coverage, 401k plan (with 3% match), unlimited vacation, pre-tax commuter benefits, stocked kitchen, open floor office layout (choose to sit or stand), subsidized Equinox gym memberships and frequent company outings</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">We have built a fluid structure where we encourage experimentation, collaboration and open communication</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Inspiring colleagues that enjoy a good lunch time debate</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">We are an equal opportunity employer</li>
</ul>',
                'language' => 'en',
                'created_at' => '2018-09-16 18:03:00',
                'updated_at' => '2018-09-19 12:59:38',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Fullstack React/Javascript Developer',
                'orderby' => 2,
                'goto' => 'https://www.facebook.com/laravelbap/photos/a.853895651479103/857265931142075/?type=3&theater',
                'description' => '<p style="margin: 0px 0px 1em; -webkit-font-smoothing: antialiased; box-sizing: border-box; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; color: #000000; font-size: 13.3333px;"><strong style="unicode-bidi: embed; -webkit-font-smoothing: antialiased; box-sizing: border-box;"><img style="display: block; margin-left: auto; margin-right: auto;" src="https://media1.giphy.com/media/QHE5gWI0QjqF2/200w.gif?cid=540216295ba2471d3354386141c0c606" width="493" height="328" /></strong></p>
<p style="margin: 0px 0px 1em; -webkit-font-smoothing: antialiased; box-sizing: border-box; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; color: #000000; font-size: 13.3333px;"><strong style="unicode-bidi: embed; -webkit-font-smoothing: antialiased; box-sizing: border-box;">What we&rsquo;re looking for:</strong></p>
<ul style="-webkit-font-smoothing: antialiased; box-sizing: border-box; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; color: #000000; font-size: 13.3333px;">
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Ability to analyze, design, develop, deploy and support client facing web applications and services.</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">JavaScript expertise (Node, React), HTML/CSS mastery, competency with CSS preprocessors (LESS, SASS) and build tools (Webpack).</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Experience with unit testing in Javascript (Tape, Mocha, Jest)</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Strong sense of ownership and the drive to tackle cross-team projects.</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Effective communication skills: explain technical solutions to both engineering and non-technical teammates.</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Team player: brings out the best in fellow engineers and plays well with product owners and designers.</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">5+ years of development experience</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Nice to haves: background with large enterprise projects, interest in mentoring junior devs, experience with analytics, familiarity with Docker &amp; Kubernetes, Test Driven Development experience</li>
</ul>
<p style="margin: 0px 0px 1em; -webkit-font-smoothing: antialiased; box-sizing: border-box; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; color: #000000; font-size: 13.3333px;"><strong style="unicode-bidi: embed; -webkit-font-smoothing: antialiased; box-sizing: border-box;">Our Benefits:</strong></p>
<ul style="-webkit-font-smoothing: antialiased; box-sizing: border-box; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; color: #000000; font-size: 13.3333px;">
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Highly competitive compensation, including annual bonus opportunities</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Medical/Dental/Vision plans, matching 401(k), pension program</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Tuition reimbursement, commuter plans, and paid time off</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Extensive Professional Training Opportunities</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Excellent Work/Life Balance</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Hackathons/Commitment to Innovation</li>
</ul>',
                'language' => 'en',
                'created_at' => '2018-09-16 18:04:00',
                'updated_at' => '2018-09-19 12:55:13',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Social Media Specialist',
                'orderby' => 3,
                'goto' => 'https://multicrm.laravel-bap.com',
                'description' => '<div style="-webkit-font-smoothing: antialiased; box-sizing: border-box; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; color: #000000; font-size: 13.3333px;"><img style="display: block; margin-left: auto; margin-right: auto;" src="https://media2.giphy.com/media/49Q9TXjm8lvWw/200w.gif?cid=540216295ba246f05263715251e0b3a9" width="477" height="267" /></div>
<div style="-webkit-font-smoothing: antialiased; box-sizing: border-box; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; color: #000000; font-size: 13.3333px;">responsibilities</div>
<div style="-webkit-font-smoothing: antialiased; box-sizing: border-box; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; color: #000000; font-size: 13.3333px;">
<ul style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Creating and publishing daily contents (text, images, video) to build meaningful connections and engagement for each specific network.</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Research, monitoring and reporting current social media trends and adapting it to the social media channels.</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Creating social media campaigns and calls-to-action that drive followers to take action.</li>
</ul>
</div>
<div style="-webkit-font-smoothing: antialiased; box-sizing: border-box; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; color: #000000; font-size: 13.3333px;">requirements</div>
<div style="-webkit-font-smoothing: antialiased; box-sizing: border-box; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; color: #000000; font-size: 13.3333px;">
<ul style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Communication and presentation skills.</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Eager to solve problems and have a proactive attitude.</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Organizational and analytical skills.</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Abilty to effectively communicate information.</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Able to work under pressure.</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Ambitious about learning quickly.</li>
<li style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">Passion to work in a start-up environment.</li>
</ul>
</div>',
                'language' => 'en',
                'created_at' => '2018-09-16 18:08:00',
                'updated_at' => '2018-09-19 12:54:37',
            ),
        ));
        
        
    }
}