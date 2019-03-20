<?php

use Illuminate\Database\Seeder;

class FaqsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faqs')->delete();
        
        \DB::table('faqs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Server Requirements',
                'description' => '<p><span style="color: #333333; font-family: Georgia, \'Bitstream Charter\', serif; font-size: 16px;">Bacon ipsum dolor amet kielbasa biltong rump porchetta. Turducken jerky pork chop landjaeger, sausage hamburger fatback cupim chicken porchetta drumstick shank. Spare ribs ground round salami shoulder, sirloin corned beef cow beef ribs doner beef shankle jerky. Burgdoggen tongue biltong cupim. Filet mignon kielbasa pork belly andouille hamburger ground round.</span></p>',
                'category_id' => 4,
                'language' => 'en',
                'created_at' => '2018-09-19 12:22:46',
                'updated_at' => '2018-09-19 12:22:46',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Installing Laravel BAP',
                'description' => '<p>Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that\'s what you see at a toy store. And you must think you\'re in a toy store, because you\'re here shopping for an infant named Jeb.</p>',
                'category_id' => 4,
                'language' => 'en',
                'created_at' => '2018-09-19 12:23:30',
                'updated_at' => '2018-09-19 12:23:30',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Access Denied Error During Installation',
                'description' => '<p>Your bones don\'t break, mine do. That\'s clear. Your cells react to bacteria and viruses differently than mine. You don\'t get sick, I do. That\'s also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We\'re on the same curve, just on opposite ends.</p>',
                'category_id' => 3,
                'language' => 'en',
                'created_at' => '2018-09-19 12:24:15',
                'updated_at' => '2018-09-19 12:24:15',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'URL rewrite',
                'description' => '<p>Well, the way they make shows is, they make one show. That show\'s called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they\'re going to make more shows. Some pilots get picked and become television programs. Some don\'t, become nothing. She starred in one of the ones that became nothing.</p>',
                'category_id' => 3,
                'language' => 'en',
                'created_at' => '2018-09-19 12:24:40',
                'updated_at' => '2018-09-19 12:24:40',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Can i use BAP on local computer?',
                'description' => '<p style="box-sizing: border-box; margin: 0px 0px 24px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; padding: 0px; vertical-align: baseline; color: #333333; font-family: Georgia, \'Bitstream Charter\', serif; font-size: 16px;">Jowl alcatra rump cow, picanha capicola landjaeger tail prosciutto drumstick t-bone fatback ham hock beef ribs. Kielbasa frankfurter capicola ham shoulder swine. Jerky pork pork loin jowl kielbasa, short loin pork belly cow turkey shankle beef boudin porchetta tenderloin shank. Meatball pig strip steak bacon swine shoulder short ribs, bresaola shank tail shankle pork chop fatback pastrami corned beef.</p>
<p style="box-sizing: border-box; margin: 0px 0px 24px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; padding: 0px; vertical-align: baseline; color: #333333; font-family: Georgia, \'Bitstream Charter\', serif; font-size: 16px;">Tail bresaola tri-tip hamburger spare ribs ground round ribeye porchetta jowl. Sausage drumstick jowl tenderloin biltong chicken kevin doner pancetta cupim pork belly burgdoggen brisket frankfurter fatback. Beef ribs alcatra picanha, andouille tri-tip corned beef jowl biltong jerky beef shankle. Bresaola chicken pork ham porchetta. Shankle pig pork belly spare ribs, venison turducken andouille.</p>',
                'category_id' => 2,
                'language' => 'en',
                'created_at' => '2018-09-19 12:25:10',
                'updated_at' => '2018-09-19 12:25:10',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Can you do customization?',
                'description' => '<div class="anyipsum-output" style="box-sizing: border-box; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; color: #333333; font-family: Georgia, \'Bitstream Charter\', serif; font-size: 16px;">
<p style="box-sizing: border-box; margin: 0px 0px 24px; background: transparent; border: 0px; padding: 0px; vertical-align: baseline;">Tri-tip shankle doner short loin meatloaf sausage biltong. Doner pancetta kielbasa, ball tip cupim andouille ham hock filet mignon chuck. Tongue alcatra buffalo tail flank kielbasa landjaeger chuck drumstick shoulder prosciutto. Doner sausage swine beef ribs kielbasa chuck prosciutto fatback buffalo salami kevin cow. Meatball ham alcatra kielbasa tongue, corned beef shank t-bone burgdoggen salami pork belly picanha.</p>
<p style="box-sizing: border-box; margin: 0px 0px 24px; background: transparent; border: 0px; padding: 0px; vertical-align: baseline;">Jowl buffalo drumstick, fatback meatloaf beef pork belly tri-tip meatball hamburger. Buffalo kielbasa tongue drumstick strip steak salami beef ribs. Sirloin ribeye andouille, cow pork porchetta tongue jerky burgdoggen shankle shoulder capicola. Bacon pork belly leberkas andouille pig brisket porchetta prosciutto salami t-bone bresaola hamburger drumstick swine tri-tip. Jerky short ribs boudin pork chop tongue turducken beef alcatra picanha porchetta meatball pork belly t-bone ham hock. Jowl pancetta doner venison picanha, chuck frankfurter.</p>
<p>&nbsp;</p>
</div>',
                'category_id' => 2,
                'language' => 'en',
                'created_at' => '2018-09-19 12:25:41',
                'updated_at' => '2018-09-19 12:25:41',
            ),
        ));
        
        
    }
}