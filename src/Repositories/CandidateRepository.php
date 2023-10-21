<?php

namespace Kagoji\Crud\Repositories;

use Kagoji\Crud\Models\Candidate;
use Illuminate\Support\Facades\DB;

use Kagoji\Crud\Repositories\Interfaces\CandidateRepositoryInterface;


class CandidateRepository implements CandidateRepositoryInterface
{

    public function getAllCandidates($limit){
        return Candidate::paginate($limit);
    }

    public function getCandidateById($id){
        return Candidate::find($id);
    }

    public function addCandidate($request){
        return Candidate::createCandidate($request->candidate_name, $request->candidate_email,$request->candidate_mobile,$request->candidate_resume_url);
    }

    public function updateCandidateById($request,$id){
        return Candidate::find($id)->updateCandidate($request->candidate_name, $request->candidate_email,$request->candidate_mobile,$request->candidate_resume_url);
    }

    public function deleteCandidateById($id){
        return Candidate::find($id)->deleteCandidate();
    }

}
