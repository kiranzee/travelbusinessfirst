<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $airline_code
 * @property string $airline_name
 * @property string $logo
 * @property int $status
 * @property string $icon
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Airline newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Airline newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Airline query()
 * @method static \Illuminate\Database\Eloquent\Builder|Airline whereAirlineCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Airline whereAirlineName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Airline whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Airline whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Airline whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Airline whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Airline whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Airline whereUpdatedAt($value)
 */
	class Airline extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $image
 * @property string $image_seo
 * @property string $banner_image
 * @property string $title
 * @property string $link_name
 * @property string|null $price
 * @property string|null $rating
 * @property int $rating_count
 * @property string|null $Long_description
 * @property int $cancellation
 * @property string $package_heading
 * @property string $status
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|BestOfActivity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BestOfActivity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BestOfActivity query()
 * @method static \Illuminate\Database\Eloquent\Builder|BestOfActivity whereBannerImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BestOfActivity whereCancellation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BestOfActivity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BestOfActivity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BestOfActivity whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BestOfActivity whereImageSeo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BestOfActivity whereLinkName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BestOfActivity whereLongDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BestOfActivity wherePackageHeading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BestOfActivity wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BestOfActivity whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BestOfActivity whereRatingCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BestOfActivity whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BestOfActivity whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BestOfActivity whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BestOfActivity whereUserId($value)
 */
	class BestOfActivity extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $comments
 * @property string $image
 * @property int $rating
 * @property string $status
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|ClientSay newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClientSay newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClientSay query()
 * @method static \Illuminate\Database\Eloquent\Builder|ClientSay whereComments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientSay whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientSay whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientSay whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientSay whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientSay whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientSay whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientSay whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientSay whereUserId($value)
 */
	class ClientSay extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $image
 * @property string|null $image_seo
 * @property string|null $price
 * @property string $status
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|ExploreDestination newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExploreDestination newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExploreDestination query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExploreDestination whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExploreDestination whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExploreDestination whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExploreDestination whereImageSeo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExploreDestination wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExploreDestination whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExploreDestination whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExploreDestination whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExploreDestination whereUserId($value)
 */
	class ExploreDestination extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $source
 * @property string $destination
 * @property string $start_date
 * @property string $end_date
 * @property string $airline
 * @property string $logo
 * @property string $route
 * @property string $route2
 * @property string $route3
 * @property int $adult_fare
 * @property int $status
 * @property int $from_departure
 * @property int $from_arrival
 * @property int $from_duration
 * @property int $to_departure
 * @property int $to_arrival
 * @property int $to_duration
 * @property int $class
 * @property int $refundable
 * @property int $meal
 * @property int $weight
 * @property int $oneway
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Flight newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Flight newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Flight query()
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereAdultFare($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereAirline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereDestination($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereFromArrival($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereFromDeparture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereFromDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereMeal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereOneway($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereRefundable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereRoute2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereRoute3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereToArrival($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereToDeparture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereToDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereWeight($value)
 */
	class Flight extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $region
 * @property string $title
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keywords
 * @property string $image
 * @property string|null $image_seo
 * @property string $banner_image
 * @property string|null $banner_image_seo
 * @property string|null $first_class_price
 * @property string|null $business_class_price
 * @property string|null $premier_economy_price
 * @property string|null $economy_price
 * @property string $heading
 * @property string $link_name
 * @property string $airline_image1
 * @property string $airline_image2
 * @property string $airline_image3
 * @property string $airline_image4
 * @property string $airline_image5
 * @property string $airline_from1
 * @property string $airline_to1
 * @property string $airline_from2
 * @property string $airline_to2
 * @property string $airline_from3
 * @property string $airline_to3
 * @property string $airline_from4
 * @property string $airline_to4
 * @property string $airline_from5
 * @property string $airline_to5
 * @property string|null $airline1_price
 * @property string|null $airline2_price
 * @property string|null $airline3_price
 * @property string|null $airline4_price
 * @property string|null $airline5_price
 * @property string $long_description
 * @property string $status
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $homepage_display
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination query()
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereAirline1Price($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereAirline2Price($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereAirline3Price($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereAirline4Price($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereAirline5Price($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereAirlineFrom1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereAirlineFrom2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereAirlineFrom3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereAirlineFrom4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereAirlineFrom5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereAirlineImage1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereAirlineImage2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereAirlineImage3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereAirlineImage4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereAirlineImage5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereAirlineTo1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereAirlineTo2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereAirlineTo3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereAirlineTo4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereAirlineTo5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereBannerImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereBannerImageSeo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereBusinessClassPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereEconomyPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereFirstClassPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereHeading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereHomepageDisplay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereImageSeo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereLinkName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereLongDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereMetaKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereMetaTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination wherePremierEconomyPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDestination whereUserId($value)
 */
	class FlightDestination extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $flight_enquiry_id
 * @property string $from
 * @property string $to
 * @property string $departure_date
 * @property string|null $return_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\FlightEnquiry $flightEnquiry
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDetailsEnquiry newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDetailsEnquiry newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDetailsEnquiry query()
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDetailsEnquiry whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDetailsEnquiry whereDepartureDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDetailsEnquiry whereFlightEnquiryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDetailsEnquiry whereFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDetailsEnquiry whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDetailsEnquiry whereReturnDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDetailsEnquiry whereTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightDetailsEnquiry whereUpdatedAt($value)
 */
	class FlightDetailsEnquiry extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $passengers
 * @property string $class_type
 * @property string $customer_name
 * @property string $customer_email
 * @property string $customer_phone
 * @property string|null $customer_comments
 * @property int $latest_offers
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\FlightDetailsEnquiry> $flightDetailsEnquiry
 * @property-read int|null $flight_details_enquiry_count
 * @method static \Illuminate\Database\Eloquent\Builder|FlightEnquiry newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FlightEnquiry newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FlightEnquiry query()
 * @method static \Illuminate\Database\Eloquent\Builder|FlightEnquiry whereClassType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightEnquiry whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightEnquiry whereCustomerComments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightEnquiry whereCustomerEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightEnquiry whereCustomerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightEnquiry whereCustomerPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightEnquiry whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightEnquiry whereLatestOffers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightEnquiry wherePassengers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightEnquiry whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightEnquiry whereUpdatedAt($value)
 */
	class FlightEnquiry extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $image
 * @property string $status
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|FlightPartner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FlightPartner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FlightPartner query()
 * @method static \Illuminate\Database\Eloquent\Builder|FlightPartner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightPartner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightPartner whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightPartner whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightPartner whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlightPartner whereUserId($value)
 */
	class FlightPartner extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $heading
 * @property string $title
 * @property string $description
 * @property string $image
 * @property string $status
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|HeroSection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HeroSection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HeroSection query()
 * @method static \Illuminate\Database\Eloquent\Builder|HeroSection whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeroSection whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeroSection whereHeading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeroSection whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeroSection whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeroSection whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeroSection whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeroSection whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeroSection whereUserId($value)
 */
	class HeroSection extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $best_of_activity_id
 * @property string $holiday_date
 * @property string $customer_name
 * @property string $customer_email
 * @property string $customer_phone
 * @property string|null $customer_comments
 * @property int $latest_offers
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\BestOfActivity $bestofactivity
 * @method static \Illuminate\Database\Eloquent\Builder|HolidayEnquiry newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HolidayEnquiry newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HolidayEnquiry query()
 * @method static \Illuminate\Database\Eloquent\Builder|HolidayEnquiry whereBestOfActivityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HolidayEnquiry whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HolidayEnquiry whereCustomerComments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HolidayEnquiry whereCustomerEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HolidayEnquiry whereCustomerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HolidayEnquiry whereCustomerPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HolidayEnquiry whereHolidayDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HolidayEnquiry whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HolidayEnquiry whereLatestOffers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HolidayEnquiry whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HolidayEnquiry whereUpdatedAt($value)
 */
	class HolidayEnquiry extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $destination
 * @property string $checkin
 * @property string $checkout
 * @property int $noofnightstay
 * @property string $starhotel
 * @property string $Roomtype
 * @property int $adultcount
 * @property int $childcount
 * @property int $infantcount
 * @property string $noofrooms
 * @property string $customer_name
 * @property int $customer_phone
 * @property string $customer_email
 * @property string $customer_comments
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|HotelEnquiry newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HotelEnquiry newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HotelEnquiry query()
 * @method static \Illuminate\Database\Eloquent\Builder|HotelEnquiry whereAdultcount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelEnquiry whereCheckin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelEnquiry whereCheckout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelEnquiry whereChildcount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelEnquiry whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelEnquiry whereCustomerComments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelEnquiry whereCustomerEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelEnquiry whereCustomerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelEnquiry whereCustomerPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelEnquiry whereDestination($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelEnquiry whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelEnquiry whereInfantcount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelEnquiry whereNoofnightstay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelEnquiry whereNoofrooms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelEnquiry whereRoomtype($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelEnquiry whereStarhotel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelEnquiry whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelEnquiry whereUpdatedAt($value)
 */
	class HotelEnquiry extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property string $region
 * @property int $id
 * @property string $title
 * @property string|null $image
 * @property string|null $image_seo
 * @property string $first_class_price
 * @property string $business_class_price
 * @property string $premier_economy_price
 * @property string $economy_price
 * @property string $status
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Popularflightdestination newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Popularflightdestination newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Popularflightdestination query()
 * @method static \Illuminate\Database\Eloquent\Builder|Popularflightdestination whereBusinessClassPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popularflightdestination whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popularflightdestination whereEconomyPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popularflightdestination whereFirstClassPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popularflightdestination whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popularflightdestination whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popularflightdestination whereImageSeo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popularflightdestination wherePremierEconomyPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popularflightdestination whereRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popularflightdestination whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popularflightdestination whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popularflightdestination whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popularflightdestination whereUserId($value)
 */
	class Popularflightdestination extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $flight_id
 * @property string $customer_name
 * @property string $customer_email
 * @property string $customer_phone
 * @property string $source
 * @property string $destination
 * @property string $departure_date
 * @property string|null $return_date
 * @property int $passengers
 * @property string $class_type
 * @property string $status
 * @property string $sales_amount
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Flight $flight
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|TicketEnquiry newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketEnquiry newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketEnquiry query()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketEnquiry whereClassType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketEnquiry whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketEnquiry whereCustomerEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketEnquiry whereCustomerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketEnquiry whereCustomerPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketEnquiry whereDepartureDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketEnquiry whereDestination($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketEnquiry whereFlightId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketEnquiry whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketEnquiry wherePassengers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketEnquiry whereReturnDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketEnquiry whereSalesAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketEnquiry whereSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketEnquiry whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketEnquiry whereUpdatedAt($value)
 */
	class TicketEnquiry extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $image
 * @property string|null $image_seo
 * @property string|null $short_description
 * @property string|null $price
 * @property string|null $rating
 * @property string|null $Long_description
 * @property string $status
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TopThingsToDo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TopThingsToDo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TopThingsToDo query()
 * @method static \Illuminate\Database\Eloquent\Builder|TopThingsToDo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TopThingsToDo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TopThingsToDo whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TopThingsToDo whereImageSeo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TopThingsToDo whereLongDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TopThingsToDo wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TopThingsToDo whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TopThingsToDo whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TopThingsToDo whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TopThingsToDo whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TopThingsToDo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TopThingsToDo whereUserId($value)
 */
	class TopThingsToDo extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $airport_code
 * @property string $airport_name
 * @property string $city
 * @property string $country_code
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|airport newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|airport newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|airport query()
 * @method static \Illuminate\Database\Eloquent\Builder|airport whereAirportCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|airport whereAirportName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|airport whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|airport whereCountryCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|airport whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|airport whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|airport whereUpdatedAt($value)
 */
	class airport extends \Eloquent {}
}

