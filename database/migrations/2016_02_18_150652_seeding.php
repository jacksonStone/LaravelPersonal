<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Year;
use App\Language;
use App\Poi;
use App\Description;
class Seeding extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      $poicount = 1;
      $year1 = new Year;
      $year1->year = "2012";
      $year1->save();
      foreach(['Java'] as $lang)
      {
        $language = new Language;
        $language->name = $lang;
        $language->year_id = 1;
        $language->save();
      }
      foreach([['Full Ride to College', '<a href="http://blog.utc.edu/news/2014/10/students-awarded-scholarships-chattanooga-technology-council/" target="_blank"><img class=\'resource\' src=\'images/scholarship.png\'></a>']] as $stuff)
      {
        $poi = new Poi;
        $poi->year_id=1;
        $poi->title = $stuff[0];
        $poi->addition = $stuff[1];
        $poi->save();
        foreach([
          'I was awarded around $70,000 in scholarships from a number of sources to attend <a href="https://www.utc.edu/" target="_blank">UTC</a>.',
          'I\'ll be graduating in Spring 2016 with a degree in Computer Science.',
          '(I currently have a GPA of <a href="images/transcript.pdf" target="_blank"><b>3.9</b></a>)'] as $d)
          {
            $description = new Description;
            $description->poi_id = $poicount;
            $description->text = $d;
            $description->save();
          }
        $poicount++;
      }


      $year2 = new Year;
      $year2->year = "2014";
      $year2->save();
      foreach(['Java, ', 'C#, ', 'PHP, ', 'SQL, ', 'Python'] as $lang)
      {
        $language = new Language;
        $language->name = $lang;
        $language->year_id = 2;
        $language->save();
      }//POIs
      foreach([
        [
          'Worked for ORNL',
          '<a href=\"http://www.ornl.gov/\" target=\"_blank\"><img class=\'resource\' src=\'images/ORNL.png\'></a>',
          'Spring of 2014 I was a student researcher for <a href="http://www.ornl.gov/" target="_blank">Oak Ridge National Laboratory</a>. While there I developed a 3D visualizer for one of their databases using <a href="http://unity3d.com/5?gclid=Cj0KEQjwhuqrBRCFuPz4ipOx5JIBEiQAZJ7F-mMSEZ4CciSM5TfY8P4XjyHWrTkd2JTWTJwsaL_RsyoaArda8P8HAQ" target="_blank">Unity</a>',
        ],
        [
          'Published Apps',
          '<a href="http://nooga.com/167681/utc-student-creates-app-that-invites-users-to-unlock-inner-artist/?fb_action_ids=1544184972479309&fb_action_types=og.likes" target="_blank"><img class=\'resource\' src=\'images/colorLocks.png\'></a>',
          'I designed, developed, and published two mobile apps. The First was <a href="http://nooga.com/166180/utc-students-create-monetize-app-called-crunch-me/"target="_blank">Crunch Me</a>, which was published for iOS. The second was <a href="https://play.google.com/store/apps/details?id=stone.jackson.colorlocked&hl=en"  target="_blank">Color Locks</a>, which was published for both iOS and Android. Both were made using <a href="http://unity3d.com/5?gclid=Cj0KEQjwhuqrBRCFuPz4ipOx5JIBEiQAZJ7F-mMSEZ4CciSM5TfY8P4XjyHWrTkd2JTWTJwsaL_RsyoaArda8P8HAQ" target="_blank">Unity</a>',
        ],
        [
          'TEDx Talk',
          '<iframe class=\'resource\' src="http://www.youtube.com/embed/7OObGFLDPtw" frameborder="0" allowfullscreen></iframe>',
          'Chattanooga had their first ever <a href="http://tedxtalks.ted.com/video/Captivating-Software-Design-%7C-J" target="_blank">TEDx</a>, and I was a speaker.'
        ]

      ] as $stuff)
      {
        $poi = new Poi;
        $poi->year_id=2;
        $poi->title = $stuff[0];
        $poi->addition = $stuff[1];
        $poi->save();
        $description = new Description;
        $description->poi_id = $poicount;
        $description->text = $stuff[2];
        $description->save();
        $poicount++;
      }


      $year3 = new Year;
      $year3->year = "2015";
      $year3->save();
      foreach(['Java, ', 'C#, ', 'PHP, ', 'SQL, ', 'Python', 'HTML & CSS', 'JavaScript (<a href="http://mean.io/#!/" target="_blank">MEAN Stack</a>)'] as $lang)
      {
        $language = new Language;
        $language->name = $lang;
        $language->year_id = 3;
        $language->save();
      }
      foreach([
        [
          'Design Intern at LPG',
          '<a href="http://lamppostgroup.com/" target="_blank"><img class=\'resource\' src=\'images/lpg.png\'></a>',
          'After the <a href="http://tedxtalks.ted.com/video/Captivating-Software-Design-%7C-J" target="_blank">TEDx talk</a> I became a designer at Lamp Post Group, learning the other end of the software equation, working predominantly with Sketch 3. <a href="/images/First-sketch.pdf" target="_blank">(some of my first work)</a>',
        ],
        [
          'Web Developer at Torch',
          '<a href="http://mytorch.com/" target="_blank"><img class=\'resource\' src=\'images/torch.png\'></a>',
          'I then became a <a href="http://www.inc.com/shelley-prevost/we-are-humans-first-workers-second-why-ux-is-winning.html" target="_blank">UI/UX oriented developer</a> for <a href="https://mytorch.com/" target="_blank">Torch</a>. Because of that, I\'ve become comfortable with the entire <a href="http://mean.io/#!/" target="_blank">MEAN</a> stack.',
        ],
        [
          'Published Research',
          '<a href="http://modsimworld.org/papers/2015/Gamification_and_Visualization_of_Sensor_Data_Analysis_in_Research_Buildings.pdf"" target="_blank"><img class=\'resource\' src=\'images/researchProject.png\'></a>',
          'I was <a href="http://modsimworld.org/papers/2015/Gamification_and_Visualization_of_Sensor_Data_Analysis_in_Research_Buildings.pdf" target="_blank">published</a> for my research at Oak Ridge and <a href="/images/gamification.zip" download>presented</a> that research at a confrence called <a href="http://www.modsimworld.org/" target="_blank">MODSIM</a>.'
        ]

      ] as $stuff)
      {
        $poi = new Poi;
        $poi->year_id=3;
        $poi->title = $stuff[0];
        $poi->addition = $stuff[1];
        $poi->save();
        $description = new Description;
        $description->poi_id = $poicount;
        $description->text = $stuff[2];
        $description->save();
        $poicount++;
      }

      $year4 = new Year;
      $year4->year = "Recently";
      $year4->save();

      foreach(['Java, ', 'C#, ', 'PHP, ', 'SQL, ', 'Python', 'HTML & CSS', 'JavaScript (<a href="http://mean.io/#!/" target="_blank">MEAN Stack</a>)', 'Ruby (<a href="http://rubyonrails.org/" target="_blank">Ruby on Rails</a>)'] as $lang)
      {
        $language = new Language;
        $language->name = $lang;
        $language->year_id = 4;
        $language->save();
      }
      foreach([
        [
          'Designed and Developed <br> Torch\'s marketing site',
          '<a href="https://mytorch.com/" target="_blank"><img style="max-width: 100%; max-height: 340px" src=\'images/Torch-router.jpg\'></a>',
          'Four months after learning my first bit of Javascript, I began designing and developing <a href="https://mytorch.com/" target="_blank">Torch\'s marketing site</a>. It is built on the MEAN stack and features an admin only dashboard that allows the marketing team to post and update blogs, FAQs, and Employee Profiles. I configured and published the site on an AWS EC2 instance.'
        ],
        [
          'Designed Torch\'s Web App',
          '<a href="/images/Torch_UI_Example.pdf" target="_blank"><img style="max-width: 100%; max-height: 340px" src=\'images/TorchUI.png\'></a>',
          'A big aspect of the product at Torch is the <a  href="/images/Torch_UI_Example.pdf" target="_blank">Web App</a> people use to interface with the router. This was the make or break point for our product\'s useability. I was put in charge of its design. I used Sketch when making the mock-ups'
        ]
      ] as $stuff)
      {
        $poi = new Poi;
        $poi->year_id=4;
        $poi->title = $stuff[0];
        $poi->addition = $stuff[1];
        $poi->save();
        $description = new Description;
        $description->poi_id = $poicount;
        $description->text = $stuff[2];
        $description->save();
        $poicount++;
      }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
