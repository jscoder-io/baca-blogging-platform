<?php

namespace App\Http\Livewire;

use App\Models\Subscriber;
use Livewire\Component;

class NewsletterSignupForm extends Component
{
    protected $error;

    public Subscriber $subscriber;

    protected $rules = [
        'subscriber.email' => 'required|email|max:255',
    ];

    public function mount(Subscriber $subscriber)
    {
        $this->subscriber = $subscriber;
    }

    public function dehydrateSubscriber(Subscriber $subscriber, $response)
    {
        $updates = $response->request->updates;
        foreach ($updates as $update) {
            if ($update['type'] !== 'callMethod') {
                continue;
            }
            $this->subscriber = new Subscriber; // Reset after calling method
        }
    }

    public function save()
    {
        try {
            $this->validate();
            $this->subscriber->save();
        } catch (\Exception $e) {
            $this->error = 'Oops! Please try again later.';
        }
    }

    public function hasError()
    {
        if ($this->error) {
            return true;
        }

        return false;
    }

    public function getError()
    {
        return $this->error;
    }

    public function render()
    {
        return view('livewire.newsletter-signup-form');
    }
}
