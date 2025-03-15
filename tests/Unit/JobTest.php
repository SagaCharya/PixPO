<?php

namespace Tests\Unit;

use App\Models\Employee;
use App\Models\Job;
use Tests\TestCase;

class JobTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_it_belongs_to_a_employee(){
        $employer = Employee::factory()->create();
        $job = Job::factory()->create([
            'employee_id' => $employer->id
        ]);

        $this->assertTrue($job->employer->is($employer));
    }
}
