<?php

namespace App\Livewire\Quiz;

use App\Models\Quiz;
use Livewire\Component;
use Illuminate\View\View;
use Illuminate\Http\Response;

class QuizList extends Component
{
    public function render(): View
    {
        $quizzes = Quiz::withCount('questions')->latest()->paginate(); 
 
        return view('livewire.quiz.quiz-list', compact('quizzes'));
    }
 
    public function delete(Quiz $quiz): void
    {
        abort_if(! auth()->user()->is_admin, Response::HTTP_FORBIDDEN, '403 Forbidden');
 
        $quiz->delete();
    }
}
