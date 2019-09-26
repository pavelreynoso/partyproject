<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Contact extends Model
    {
        protected $table = 'contacts';
        
        protected $guarded = ['id'];

        protected $fillable = [
            'phone',
            'contact_email'
        ];


        public function provider()
        {
            $this->belongsTo('App\ProviderDetails');
        }

    }
