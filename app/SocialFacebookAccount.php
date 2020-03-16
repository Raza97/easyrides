<?php
// SocialFacebookAccount.php
namespace App;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class SocialFacebookAccount extends Model
{
    protected $fillable = ['user_id', 'provider_user_id', 'provider'];
    public $table = 'user_social_accounts';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}