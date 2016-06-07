<?php 

class PostTableSeeder extends Seeder
{
	public function run()
	{

		$post = new Post();
        $post->title = 'Motorcycles ';
        $post->img_url = 'http://lotusautoxperts.com/wp-content/uploads/2015/05/motorcycle2.jpg';
        $post->content = 'Motorcycles are nice to look at. It sucks if you crash though. Motorbikes have an engine, I live V-twins but only becasue they look so well balanced, lots of good bike use paralel twins so I guess they are fine.

		The biggest engine bike I have ever owned or ridden was a 600cc Aprilia pegaso.';
        $post->catagory = 'Vehicles';
        $post->meta_description = 'Motorcycles are nice to look at. It sucks if you crash though.';
        $post->user_id = User::first()->id;
        $post->save();

        $post = new Post();
        $post->title = 'The Philadelphia Eagles';
        $post->img_url = 'http://cornerpubsports.com/wp-content/uploads/2015/08/nfl_g_eagles-fans_mb_1296x729-e1440164536504.jpg';
        $post->content = "The Philadelphia Eagles is a professional football franchise based in Philadelphia, Pennsylvania. The Eagles compete in the National Football League (NFL) as a member club of the league's National Football Conference (NFC) East division. The Eagles have won three NFL championships and played in two Super Bowl games. These were in 1980 (losing 27–10 to the Oakland Raiders), and in 2004 (losing 24–21 to the New England Patriots). To date, the Eagles are the only team in the NFC East to have never won a Super Bowl championship.

			The club was established in 1933 as a replacement for the bankrupt Frankford Yellow Jackets, when a group led by Bert Bell secured the rights to an NFL franchise in Philadelphia. Bell, Chuck Bednarik, Bob Brown, Reggie White, Steve Van Buren, Tommy McDonald, Greasy Neale, Pete Pihos, Sonny Jurgensen, and Norm Van Brocklin have been inducted to the Pro Football Hall of Fame.

			The team has an intense rivalry with the New York Giants. This rivalry is the oldest in the NFC East and is among the oldest in the NFL. It was ranked by NFL Network as the number one rivalry of all-time and Sports Illustrated ranks it amongst the top ten NFL rivalries of all-time at number four,[3] and according to ESPN, it is one of the fiercest and most well-known rivalries in the American football community.[4] They also have a historic rivalry with the Washington Redskins, as well as their bitter rivalry with the Dallas Cowboys, which has become more high-profile in the last three decades.

			Eagles fans are among the most loyal in the NFL. They consistently rank in the top three in attendance and have sold out every game since the 1999 season. In a Sports Illustrated poll of 321 NFL players, Eagles fans were selected the most intimidating fans in the NFL.";
        $post->catagory = 'Sport';
        $post->meta_description = 'I like the Eagles becasue their fans booed Santa Claus';
        $post->user_id = User::first()->id;
        $post->save();

        $post = new Post();
        $post->title = 'Showers';
        $post->img_url = 'http://damhyul3s75yv.cloudfront.net/photos/12054/original_Emirates_First_Class_Lounge_Review-Shower.jpg';
        $post->content = '<p>A shower is a place in which a person bathes under a spray of typically warm or hot water. Indoors, there is a drain in the floor. Most showers have temperature, spray pressure and adjustable showerhead nozzle settings.</p> <p>The simplest showers have a swivelling nozzle aiming down on the user, while more complex showers have a showerhead connected to a hose that has a mounting bracket. This allows the showerer to spray the water at different parts of their body. A shower can be installed in a small shower stall or bathtub with a plastic shower curtain or door.</p> <p>Showering is common in Western culture due to the efficiency of using it compared to a bathtub. Its use in hygiene is therefore common practice. A shower uses less water on average than a bath: 80 litres for a shower compared to 150 litres for a bath.</p>';
        $post->catagory = 'Lifestyle'; 
        $post->meta_description = 'A shower is a place in which a person bathes under a spray of typically warm or hot water';
        $post->user_id = User::first()->id;
        $post->save();

		$post = new Post();
        $post->title = 'Bitcoin';
        $post->img_url = 'http://i.imgur.com/xHdgwXh.jpg';
        $post->content = 'Bitcoin is a hybrid asset, it’s an invention, technology, payment processor, network, store of value, unit of account, currency, commodity, investment et cetera, hence a hybrid asset. Bitcoins allow any 2 people to transact almost free and instantly, anytime, anywhere online with no 3rd parties such as banks or governments involved. Sending someone money is as quick and easy as sending an email.';
        $post->catagory = 'Fiance';
        $post->meta_description = 'Bitcoins allow any 2 people to transact almost free and instantly, anytime, anywhere';
        $post->user_id = User::first()->id;
        $post->save();
	}

}


?>