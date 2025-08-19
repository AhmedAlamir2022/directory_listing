<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Auth;

class MaxAmenities implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $user = Auth::user();

        if (!$user || !$user->subscription || !$user->subscription->package) {
            $fail("You don't have an active subscription or package.");
            return;
        }

        $packageAmenitiesLimit = $user->subscription->package->num_of_amenities;

        if ($packageAmenitiesLimit !== -1 && count($value) > $packageAmenitiesLimit) {
            $fail("You can only use $packageAmenitiesLimit Amenities");
        }
    }
}
