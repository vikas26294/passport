<?php

namespace Laravel\Passport;

use Illuminate\Database\Eloquent\Model;

class PersonalAccessClient extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;

    /**
     * The guarded attributes on the model.
     *
     * @var array
     */
    protected $guarded = [];

    public function __construct()
    {
        $this->table = config('auth.tables_mapping.oauth_personal_access_clients');
    }

    /**
     * Get all of the authentication codes for the client.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo(Passport::clientModel());
    }
}
