<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Operations extends Model
{

    public static function getFleet($total = 8) {
		return DB::table('phpvms_aircraft')
			->select('icao', 
					 DB::raw('MAX(`fullname`) as fullname'), 
					 DB::raw('MAX(`range`) as `range`'), 
					 DB::raw('MAX(`weight`) as weight'), 
					 DB::raw('MAX(`cruise`) as cruise'), 
					 DB::raw('MAX(`maxpax`) as maxpax'), 
					 DB::raw('MAX(`maxcargo`) as maxcargo'))
			->where('enabled', 1)
			->groupBy('icao')
			->limit($total)
			->get();
	}		

    public static function getPilots() {
      return DB::table('phpvms_pilots')->get();
    }

    public static function getPireps() {
      return DB::table('phpvms_pireps')->limit(50)->orderBy('pirepid', 'DESC')->get();
    }

    public static function getPilotsHub($hub) {
    return DB::table('phpvms_pilots')->where('hub', $hub)->get();
  }

  public static function getIVAO_ID($pilotid) {
    $data = DB::table('phpvms_fieldvalues')->where('pilotid', $pilotid)->where('fieldid', 1)->first();
    if($data) {
      return $data->value;
    } else {
      return "Not linked";
    }
  }

  public static function getVATSIM_ID($pilotid) {
    $data = DB::table('phpvms_fieldvalues')->where('pilotid', $pilotid)->where('fieldid', 2)->first();
    if($data) {
      return $data->value;
    } else {
      return "Not linked";
    }
  }

    public static function fileurl($path) {
      $url = env('VA_URL');
      if ($path[0] != '/') $path = '/' . $path;
      return $url . $path;
    }

    public static function discord_deliver($message) {
    	$hookObject = json_encode([
						/*
						 * The general "message" shown above your embeds
						 */
						// "content" => $_POST['message'],
						/*
						 * The username shown in the message
						 */
						// "username" => SITE_NAME." Notifications",
						/*
						 * The image location for the senders image
						 */
						// "avatar_url" => SITE_URL."/iCrew/favicon.png",
						/*
						 * Whether or not to read the message in Text-to-speech
						 */
						"tts" => false,
						/*
						 * File contents to send to upload a file
						 */
						// "file" => "",
						/*
						 * An array of Embeds
						 */
						"embeds" => [
								/*
								 * Our first embed
								 */
								[
										// Set the title for your embed
										// "title" => "Google.com",

										// The type of your embed, will ALWAYS be "rich"
										"type" => "rich",

										// A description for your embed
										"description" => $message,

										// The URL of where your title will be a link to
										"url" => env('APP_URL'),

										/* A timestamp to be displayed below the embed, IE for when an an article was posted
										 * This must be formatted as ISO8601
										 */
											// "timestamp" => "2018-03-10T19:15:45-05:00",

										// The integer color to be used on the left side of the embed
										"color" => hexdec( "fafafa" ),

										// Footer object
										"footer" => [
												"text" => env('APP_URL'). " | Powered by iCrew™",
													"icon_url" => env('VA_URL')."/iCrew/favicon.png",
										],

										// Image object
										// "image" => [
										//     "url" => "https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png"
										// ],
										//
										// // Thumbnail object
										// "thumbnail" => [
										//     "url" => "https://pbs.twimg.com/profile_images/972154872261853184/RnOg6UyU_400x400.jpg"
										// ],
										//
										// // Author object
										"author" => [
												"name" => "Laravel Frontend"
										]
								]
						]

				], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

				$ch = curl_init();

				curl_setopt_array( $ch, [
						CURLOPT_URL => env('DISCORD_WEBHOOK'),
						CURLOPT_POST => true,
						CURLOPT_POSTFIELDS => $hookObject,
						CURLOPT_HTTPHEADER => [
								"Content-Type: application/json"
						]
				]);


				$response = curl_exec( $ch );

					if (curl_errno($ch)) {
						// his would be your first hint that something went wrong
						die('Something went wrong  ' . curl_error($ch));
					} else {
						return "Discord message sent!";
					}
    }
}
