<?php

namespace Kagoji\Crud\Repositories\Interfaces;


interface CandidateRepositoryInterface
{
    public function getAllCandidates($limit);
    public function getCandidateById($id);
    public function addCandidate($request);
    public function updateCandidateById($request,$id);
    public function deleteCandidateById($id);
}
