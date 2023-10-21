<?php

namespace Kagoji\Crud\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Candidate extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'email','phone','resume_url'];

    // Create a new Candidate
    public static function createCandidate($name, $email,$phone,$resume_url)
    {
        return self::create([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'resume_url' => $resume_url,
        ]);
    }

    // Update an existing Candidate
    public function updateCandidate($name, $email,$phone,$resume_url)
    {
        $this->update([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'resume_url' => $resume_url,
        ]);
    }

    // Delete the Candidate
    public function deleteCandidate()
    {
        $this->delete();
    }
}
