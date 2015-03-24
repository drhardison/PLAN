<?php
if(file_exists('DISABLED')) { echo 'install has been disabled because it has already been run.<br />If you wish to run it again, please delete the file /install/DISABLED'; exit();}
	$create_table_queries = array(
		"master" => "alpver varchar(20) NOT NULL,
			policyurl varchar(255) NULL,
			gamerhour varchar(255) NULL,
			marathonleader BIGINT DEFAULT '0',
			benchmarkleader BIGINT DEFAULT '0',
			tournamentunlock int(11) NOT NULL,
			proficiencylock BOOL NOT NULL,
			currentskin varchar(255) NOT NULL,
			currentlanguage varchar(10) NOT NULL,
			dateformat varchar(45) NOT NULL,
			skin_override BOOL NOT NULL,
			ip_register_lock BOOL NOT NULL,
			max_file_upload_size BIGINT NOT NULL,
			shoutbox_index_limit int(3) NOT NULL,
			techsupport_index_limit int(3) NOT NULL,
			authbyiponly BOOL NOT NULL,
			doublecheckpassword BOOL NOT NULL,
			loginselect BOOL NOT NULL,
			caching BOOL NOT NULL,
			useskinforcaffeine BOOL NOT NULL,
			internetmode BOOL NOT NULL,
			alldates BOOL NOT NULL,
    		staff_photo_url varchar(200) NULL,
    		staff_photo_width int(3) DEFAULT '0',
      		sponsors_index_limit INT(3) DEFAULT '0',
			sponsors_border TINYINT(1) DEFAULT '0',
			sponsors_width INT(3) DEFAULT '0',
    		sponsors_banner_width INT(3) DEFAULT '0',
    		pollsguest TINYINT(1) DEFAULT '0',
    		files_redirect VARCHAR(255) NULL,
    		important_info TEXT NULL,
    		music_stream_id BIGINT UNSIGNED DEFAULT '0',
    		music_files VARCHAR(255) NULL,
    		music_min_time INT(3) DEFAULT '0',
    		music_max_queue INT(3) DEFAULT '0',
    		voice_mode VARCHAR(4) DEFAULT '',
    		voice_name VARCHAR(45) DEFAULT '',
    		voice_ip VARCHAR(45) DEFAULT '',
    		voice_pass VARCHAR(20) DEFAULT '',
            pizza_orders_lock TINYINT(1) DEFAULT '0' NOT NULL",
        "config" => "name varchar(100) NOT NULL,
    		org varchar(100) NOT NULL,
    		max int unsigned NOT NULL,
        	admin varchar(40) NOT NULL,
    		datetimestart datetime NOT NULL,
   	 		datetimeend datetime NOT NULL,
    		email varchar(40) NOT NULL,
			country varchar(20) NOT NULL,
			address varchar(60) NOT NULL,
			location varchar(50) NOT NULL,
			websiteurl varchar(70) NOT NULL,
			registered BOOL NOT NULL,		
    		alp_tournament_mode tinyint(1) NOT NULL,
    		alp_tournament_mode_computer_games tinyint(1) NOT NULL",
		"toggle" => "benchmarks BOOL NOT NULL,
			caffeine BOOL NOT NULL,
			filesharing BOOL NOT NULL,
			uploading BOOL NOT NULL,
			files BOOL NOT NULL,
			foodrun BOOL NOT NULL,
			servers BOOL NOT NULL,
			gamingrigs BOOL NOT NULL,
			gamerequests BOOL NOT NULL,
			marath BOOL NOT NULL,
			music BOOL NOT NULL,
			policy BOOL NOT NULL,
			prizes BOOL NOT NULL,
			seating BOOL NOT NULL,
			shoutbox BOOL NOT NULL,
			techsupport BOOL NOT NULL,
			currentattendance BOOL NOT NULL,
			gamerofthehour BOOL NOT NULL,
			timeremaining BOOL NOT NULL,
			schedule BOOL NOT NULL,
			satellite BOOL NOT NULL,
    		sponsors BOOL NOT NULL,
    		messaging BOOL NOT NULL,
	     	staff BOOL NOT NULL,
			hlsw BOOL NOT NULL,
            pizza BOOL NOT NULL",
		"users" => "userid BIGINT NOT NULL AUTO_INCREMENT, 
			username varchar(40) NOT NULL, 
			first_name varchar(30) NOT NULL, 
			last_name varchar(30) NOT NULL, 
			passwd varchar(34) NOT NULL, 
			paid BOOL DEFAULT '0',
			email varchar(60) NOT NULL,
			language varchar(10) NOT NULL,
			skin varchar(45) NOT NULL,
			dateformat varchar(45) NOT NULL, 
			display_email BOOL NOT NULL, 
			gender varchar(10) NOT NULL, 
			gaming_group varchar(20) NOT NULL, 
			quote varchar(255) NULL,
			room_loc int(11) DEFAULT '0', 
			caffeine_mg double(10,2) DEFAULT '0', 
			proficiency int(4) NOT NULL, 
			recent_ip varchar(15) NOT NULL, 
			display_ip BOOL NOT NULL, 
			priv_level int(5) NOT NULL, 
			sesid varchar(34) NULL, 
			date_of_arrival datetime NOT NULL,	
			date_of_departure datetime NULL,
			sharename varchar(35) NULL,
			ftp_server BOOL DEFAULT '0', 
			comp_proc varchar(60) NULL,
			comp_proc_spd varchar(60) NULL,
			comp_proc_type varchar(60) NULL,
			comp_mem varchar(60) NULL,
			comp_mem_type varchar(60) NULL,
			comp_hdstorage varchar(60) NULL, 
			comp_gfx_gpu varchar(60) NULL,
			comp_gfx_type varchar(60) NULL,
			ccode varchar(34) NULL,
			marathon_points int(5) DEFAULT '0',
			marathon_points_tourney int(10) DEFAULT '0',
			marathon_rank int(10) DEFAULT '0',
			PRIMARY KEY (userid)",
		"users_benchmarks" => "id BIGINT NOT NULL AUTO_INCREMENT,
			benchid BIGINT NOT NULL,
			userid BIGINT NOT NULL,
			value BIGINT DEFAULT '0',
			PRIMARY KEY (id)",
		"benchmarks" => "id BIGINT NOT NULL AUTO_INCREMENT,
			name varchar(255) NULL,
			abbreviation varchar(100) NULL,
			composite BOOL DEFAULT '0',
			deflate INT(3) NOT NULL,
			PRIMARY KEY (id)",
		"techsupport" => "userid BIGINT NOT NULL,
			itemid BIGINT NOT NULL AUTO_INCREMENT,
			itemtime datetime NULL,
			severity int(2) DEFAULT '0',
			fixed BOOL DEFAULT '0',
			fixer BIGINT DEFAULT '0',
			info TEXT,
        	    	result TEXT,
            		assigned_to BIGINT(20) NOT NULL,
			PRIMARY KEY (itemid)",
		"news" => "userid BIGINT NOT NULL,
			itemid BIGINT NOT NULL AUTO_INCREMENT,
			itemtime datetime NULL,
			headline varchar(60) NULL,
			news_article BLOB NULL,
			hide_item BOOL NOT NULL,
			PRIMARY KEY (itemid)",
		"schedule" => "itemid BIGINT NOT NULL AUTO_INCREMENT,
			itemtime datetime NULL,
			itemtime_priv int(5) NOT NULL,
			headline varchar(60) NULL,
			PRIMARY KEY (itemid)",
		"shoutbox" => "userid BIGINT NOT NULL,
			itemid BIGINT NOT NULL AUTO_INCREMENT,
			itemtime datetime NULL,
			post BLOB NULL,PRIMARY KEY (itemid)",
		"foodrun" => "userid BIGINT NOT NULL,
			itemid BIGINT NOT NULL AUTO_INCREMENT,
			itemtime datetime NULL,
			headline varchar(60) NULL,
			PRIMARY KEY (itemid)",
		"foodplaces" => "itemid BIGINT NOT NULL AUTO_INCREMENT,
			name varchar(255) NULL,
			address varchar(255) NULL,
			city varchar(100) NULL,
			state varchar(10) NULL,
			zipcode varchar(12) NULL,
			phone varchar(20) NULL,
			traveltime varchar(100) NULL,
			delivery BOOL NULL,
			PRIMARY KEY (itemid)",
		"lodging" => "itemid BIGINT NOT NULL AUTO_INCREMENT,
			name varchar(255) NULL,
			address varchar(255) NULL,
			phone varchar(20) NULL,
			costpernight BIGINT NOT NULL,
			traveltime varchar(100) NULL,
			PRIMARY KEY (itemid)",
		"poll" => "pollid BIGINT NOT NULL AUTO_INCREMENT,
			headline varchar(255) NULL,
			choice1 varchar(255) NULL,
			choice2 varchar(255) NULL,
			choice3 varchar(255) NULL,
			choice4 varchar(255) NULL,
			choice5 varchar(255) NULL,
			choice6 varchar(255) NULL,
			choice7 varchar(255) NULL,
			choice8 varchar(255) NULL,
			choice9 varchar(255) NULL,
			choice10 varchar(255) NULL,
			choice11 varchar(255) NULL,
			choice12 varchar(255) NULL,
			choice13 varchar(255) NULL,
			choice14 varchar(255) NULL,
			choice15 varchar(255) NULL,
			activepoll BOOL DEFAULT '0',
			PRIMARY KEY (pollid)",
		"poll_maps" => "id BIGINT NOT NULL AUTO_INCREMENT, tourneyid BIGINT NOT NULL, filename varchar(255) NOT NULL, selected BOOL NOT NULL, filedesc BLOB, PRIMARY KEY(id)",
		"poll_votes" => "userid BIGINT NOT NULL,pollid BIGINT NOT NULL,choiceid BIGINT NOT NULL",
		"poll_votes_maps" => "id BIGINT NOT NULL AUTO_INCREMENT,
			userid BIGINT NOT NULL,
			tourneyid BIGINT NOT NULL,
			mapid BIGINT NOT NULL,
			vote int(1) DEFAULT '0',
			PRIMARY KEY (id)",
		"prizes" => "prizeid BIGINT NOT NULL AUTO_INCREMENT,
			prizename varchar(255) NULL,
			prizevalue DECIMAL(10,2) NOT NULL,
			prizepicture varchar(255) NULL,
			prizequantity BIGINT NOT NULL,
			prizegroup int(11) NOT NULL,
			tourneyid BIGINT NOT NULL,
			tourneyplace BIGINT NOT NULL,
			tourneyclaim BOOL NOT NULL,
			PRIMARY KEY (prizeid)",
		"prizes_votes" => "userid BIGINT NOT NULL,prizeid BIGINT NULL,getall BOOL NULL",
		"prizes_control" => "id int(11) NOT NULL auto_increment,
			lock_prizes tinyint(1) default '0',
			draw_mode int(11) default '1',
			PRIMARY KEY  (id)",
		"prizes_display_groups" => "prizegroup int(11) NOT NULL default '0',
			PRIMARY KEY  (prizegroup)",
		"prizes_unwinners" => "userid int(11) NOT NULL default '0',
			PRIMARY KEY  (userid)",
		"prizes_winners" => "id int(11) NOT NULL auto_increment,
			prizeid int(11) default '0',
			prizegroup int(11) DEFAULT '0',
			winnerid int(11) default '0',
			group_order int(11) default '0',
			claimed tinyint(1) default '0',
			ignoreit tinyint(1) DEFAULT '0',
			PRIMARY KEY  (id)",
		"seating_control" => "id int(11) NOT NULL auto_increment,
			pixelcorr int(11) default NULL,
			distancecorr int(11) default NULL,
			distanceunits varchar(20) default NULL,
			room_width int(11) default NULL,
			room_height int(11) default NULL,
			dev_mode tinyint(1) default NULL,
			dev_javascript tinyint(1) default '1',
			grid tinyint(1) default NULL,
			PRIMARY KEY  (id)",
		"seating_seats" => "id int(11) NOT NULL auto_increment,
			x int(11) default NULL,
			y int(11) default NULL,
			shape varchar(20) default NULL,
			direction varchar(10) default NULL,
			sittable tinyint(1) default NULL,
			reservedID int(11) default NULL,
			groupnum int(11) default NULL,
			dev_selected tinyint(1) default '0',
			PRIMARY KEY  (id)",
		"caffeine" => "id BIGINT NOT NULL auto_increment,userid BIGINT NOT NULL,caffeine_date datetime NOT NULL,caffeine_id BIGINT NOT NULL,caffeine_oz double(4,2) NOT NULL,caffeine_mult double(10,5) NOT NULL,caffeine_qty int(11) NOT NULL,caffeine_total double(10,2) NOT NULL,PRIMARY KEY (id)",
		"caffeine_types" => "id BIGINT NOT NULL auto_increment,
			name varchar(255) NOT NULL,
			PRIMARY KEY (id)",
		"caffeine_items" => "id BIGINT NOT NULL auto_increment,
			ttype varchar(255) NULL,
			name varchar(255) NULL,
			caffeine_permg double unsigned NOT NULL,
			PRIMARY KEY (id)",
		"tournament_teams_type" => "id BIGINT NOT NULL auto_increment,
			gameid BIGINT DEFAULT '0',
			onename varchar(100) NULL,
			onecolor varchar(10) NOT NULL,
			twoname varchar(100) NULL,
			twocolor varchar(10) NOT NULL,
			PRIMARY KEY (id)",
		"games" => "gameid BIGINT NOT NULL auto_increment,
			name varchar(255) NOT NULL,
			short varchar(16) NULL,
			current_version varchar(40) NULL,
			url_update varchar(255) NULL,
			url_maps varchar(255) NULL,
			thumbs_dir varchar(255) NULL,
			querystr2 varchar(20) NULL,
			PRIMARY KEY (gameid)",
		"servers" => "id BIGINT NOT NULL auto_increment,
			tourneyid BIGINT NOT NULL,
			name varchar(100) NULL,
			ipaddress varchar(255) NULL,
			gameid BIGINT NOT NULL,
			queryport varchar(10) NOT NULL,
			PRIMARY KEY (id)",
		"tournament_matches" => "id BIGINT NOT NULL auto_increment,
			tourneyid BIGINT NOT NULL,
			rnd int(10) NOT NULL,
			mtc int(10) NOT NULL,
			server BIGINT NOT NULL,
			top_x_advance BIGINT NOT NULL,
			bracket varchar(3) NOT NULL,
			map varchar(120) NULL,
			id_win BIGINT NOT NULL,
			id_win_top BOOL DEFAULT '0',
			id_lose BIGINT NOT NULL,
			id_lose_top BOOL DEFAULT '0',
			PRIMARY KEY (id)",
		"tournament_matches_score_votes" => "id BIGINT NOT NULL auto_increment,
			tourneyid BIGINT NOT NULL,
			matchid BIGINT NOT NULL,
			userid BIGINT NOT NULL,
			entry_id BIGINT NOT NULL,
			entry_val int(10) NOT NULL,
			PRIMARY KEY (id)",
		"tournament_matches_teams" => "id BIGINT NOT NULL auto_increment,
			tourneyid BIGINT NOT NULL,
			matchid BIGINT NOT NULL,
			team BIGINT NOT NULL,
			top BOOL NOT NULL,
			score int(20) DEFAULT NULL,
			PRIMARY KEY (id)",
		"tournaments" => "tourneyid BIGINT NOT NULL auto_increment,
			name varchar(255) NULL,
			ttype BIGINT NOT NULL,
			itemtime datetime NULL,
			url_stats varchar(255) NULL,
			gameid BIGINT DEFAULT '0',
			random BOOL DEFAULT '0',
			per_team int(10) DEFAULT '0',
			max_teams int(15) DEFAULT '0',
			ffa BOOL DEFAULT '0',
			marathon BOOL DEFAULT '0',
			lockteams BOOL DEFAULT '0',
			lockjoin BOOL DEFAULT '0',
			lockstart BOOL DEFAULT '0',
			lockfinish BOOL DEFAULT '0',
			teamcolors BIGINT DEFAULT '0',
			playforthird BOOL DEFAULT '0',
			doublefinal BOOL DEFAULT '0',
			switchover int(4) DEFAULT '0',
			rrsplit int(4) DEFAULT '0',
			timelimit datetime NULL,
			moderatorid BIGINT DEFAULT '0',
			notes BLOB NULL,
			settings BLOB NULL,
			tentative BOOL DEFAULT '0',
			PRIMARY KEY (tourneyid)",
		"tournament_teams" => "id BIGINT NOT NULL auto_increment,
			tourneyid BIGINT NOT NULL,
			name varchar(100) NULL,
			captainid BIGINT DEFAULT '0',
			sig varchar(20) NULL,
			sigplace BOOL DEFAULT '0',
			ranking BIGINT DEFAULT '0',
			in_ladder BOOL DEFAULT '0',
			ladder_ranking int(5) DEFAULT '0',
			PRIMARY KEY (id)",
		"tournament_players" => "id BIGINT NOT NULL auto_increment,
			tourneyid BIGINT NOT NULL,
			userid BIGINT NOT NULL,
			teamid BIGINT DEFAULT '0',
			ranking BIGINT NOT NULL,
			in_ladder BOOL NOT NULL,
			ladder_ranking int(5) NOT NULL,
			PRIMARY KEY (id)",
		"game_requests" => "id BIGINT NOT NULL auto_increment,
			userid BIGINT NOT NULL,
			gameid BIGINT DEFAULT '0',
			gamename varchar(255) NULL,
			itemtime DATETIME NOT NULL,
			ipaddress varchar(255) NULL,
			queryport varchar(10) NULL,
			PRIMARY KEY (id)",
		"pid" => "name tinyblob,
			pid int",
		"music" => "musicid int(11) NOT NULL auto_increment,
            title varchar(64) NOT NULL default '',
            artist varchar(64) NOT NULL default '',
            genre varchar(40) NOT NULL default '',
            path TEXT NOT NULL default '',
            plays int(4) NOT NULL default '0',
            playingid int(11) unsigned NOT NULL default '0',
            nowplaying tinyint(1) NOT NULL default '0',
            votes int(11) unsigned NOT NULL default '0',
            PRIMARY KEY  (musicid)",
		"music_votes" => "voteid int(11) unsigned NOT NULL auto_increment,
    		playingid int(11) unsigned NOT NULL default '0',
    		musicid int(11) unsigned NOT NULL default '0',
    		userid int(11) unsigned NOT NULL default '0',
    		subtime int(12) NOT NULL default '0',
    		PRIMARY KEY  (voteid)",
    	"staff" => "staffid bigint(20) NOT NULL auto_increment,
    		name varchar(150) NOT NULL default '',
    		enabled tinyint(1) NOT NULL default '1',
    		priority bigint(20) NOT NULL default '0',
    		PRIMARY KEY  (name),
    		UNIQUE KEY staffid (staffid),
    		KEY enabled (enabled,priority)",
    	"users_staff" => "id bigint(20) NOT NULL auto_increment,
    		userid bigint(20) NOT NULL default '0',
    		staffid bigint(20) NOT NULL default '0',
    		data text NOT NULL,
    		PRIMARY KEY  (id),
    		UNIQUE KEY idpair (userid,staffid)",
    	"sponsors" => "id bigint(20) NOT NULL auto_increment,
    		priority bigint(20) NOT NULL default 1,
    		sponsor varchar(50) default NULL,
    		sponsor_url varchar(100) default NULL,
    		img_alt varchar(100) default NULL,
    		img_banner_url varchar(100) default NULL,
    		img_sidebar_url varchar(100) default NULL,
    		caption varchar(100) default NULL,
    		description text default NULL,
    		enabled tinyint(1) NOT NULL default 1,
    		PRIMARY KEY (id)",
    	"modules" => "`moduleid` int(10) unsigned NOT NULL auto_increment,
  			`file` varchar(45) NOT NULL default '',
 			`ordernum` int(10) unsigned NOT NULL default '0',
  			`description` varchar(45) NOT NULL default '',
  			`required` varchar(45) default NULL,
  			PRIMARY KEY  (`moduleid`)",
		"messages" => "  `messageid` BIGINT(20) UNSIGNED NOT NULL  AUTO_INCREMENT,
            `to_userid` BIGINT(20) UNSIGNED NOT NULL DEFAULT 0,
            `from_userid` BIGINT(20) UNSIGNED NOT NULL DEFAULT 0,
            `time_stamp` TIMESTAMP NOT NULL,
            `subject` VARCHAR(255) NOT NULL DEFAULT '',
            `data` BLOB NOT NULL DEFAULT '',
            `read` ENUM('y','n') NOT NULL DEFAULT 'n',
            `deleted` ENUM('y','n') NOT NULL DEFAULT 'n',
            PRIMARY KEY(`messageid`),
            INDEX `Index_2`(`to_userid`, `deleted`),
            INDEX `Index_3`(`to_userid`, `read`, `deleted`),
            INDEX `Index_4`(`from_userid`)",
        "pizza" => "  `pizzaid` bigint(20) NOT NULL auto_increment,
            `pizza` varchar(150) NOT NULL default '',
            `description` varchar(255) NOT NULL default '',
            `price` decimal(20, 2) NOT NULL default '0',
            `enabled` tinyint(1) NOT NULL default '0',
            UNIQUE KEY `id` (`pizzaid`),
            KEY `pizza` (`pizza`)",
        "users_pizza" => "  `id` bigint(20) NOT NULL auto_increment,
            `userid` bigint(20) NOT NULL default '0',
            `pizzaid` varchar(150) NOT NULL default '0',
            `quantity` bigint(20) NOT NULL default '0',
            `paid` tinyint(1) NOT NULL default '0',
            `delivered` tinyint(1) NOT NULL default '0',
            PRIMARY KEY  (`id`),
            UNIQUE KEY `id` (`id`)"
	);
	
// tournaments notes ---------------------------------------------------
// timelimit is for ladder tournaments and maybe round robin tournaments
// switchover is the round number for combination tournaments to switch.
// playforthird is an extra round in single elimination tournaments that determines 3rd and 4th place.
// doublefinal is for double elimination tournaments -- if the winner of the winners bracket has to lose twice to lose the tournament.
// rrsplit is how many teams are in each split of the round robin.

?>