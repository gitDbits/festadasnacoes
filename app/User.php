<?php namespace App;

use Artesaos\Defender\Traits\HasDefenderTrait;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword, HasDefenderTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password', 'id_users_tipo'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

    /**
     * Relacionamento User com Cliente 1 : 1
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Cliente');
    }

    public function user_tipo()
    {
        return $this->belongsTo('App\UsersTipo');
    }

    public function isAdministrador()
    {
        return \Auth::user()->id_users_tipo == 1 ? true : false;
    }

    public function isFuncionario()
    {
        return \Auth::user()->id_users_tipo == 2 ? true : false;
    }

    public function isCliente()
    {
        return \Auth::user()->id_users_tipo == 3 ? true : false;
    }
}