<?php

namespace Database\Seeders;

use App\Models\Opportunity;
use App\Models\OpportunityArabic;
use App\Models\OpportunityEnglish;
use App\Models\OpportunityFrench;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class OpportunityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json_opportunities_ar = File::get('database/datas/opportunity_ar.json');
        $opportunityArabics = json_decode($json_opportunities_ar);
        
        $json_opportunities_en = File::get('database/datas/opportunity_en.json');
        $opportunityEnglishes = json_decode($json_opportunities_en);

        $json_opportunities_fr = File::get('database/datas/opportunity_fr.json');
        $opportunityFrenches = json_decode($json_opportunities_fr);

        foreach ($opportunityArabics as $key => $opportunity) {
            $existingOpportunityArabic = Opportunity::where('opportunityable_type', '=', OpportunityArabic::class)->first();

            if (!$existingOpportunityArabic) {
                $opportunityArabic = new OpportunityArabic();
                $opportunityArabic->save();

                Opportunity::create([
                    'opportunity_information' => $opportunity->opportunity_information,
                    'scholarship' => $opportunity->scholarship,
                    'adapted_curricula' => $opportunity->adapted_curricula,
                    'teaching_modality' => $opportunity->teaching_modality,
                    'future_job' => $opportunity->future_job,
                    'multimedia_center' => $opportunity->multimedia_center,
                    'choice_partnership' => $opportunity->choice_partnership,
                    'opportunityable_id' => $opportunityArabic->id,
                    'opportunityable_type' => OpportunityArabic::class,
                ]);
            }
        }

        foreach ($opportunityEnglishes as $key => $opportunity) {
            $existingOpportunityEnglish = Opportunity::where('opportunityable_type', '=', OpportunityEnglish::class)->first();

            if (!$existingOpportunityEnglish) {
                $opportunityEnglish = new OpportunityEnglish();
                $opportunityEnglish->save();

                Opportunity::create([
                    'opportunity_information' => $opportunity->opportunity_information,
                    'scholarship' => $opportunity->scholarship,
                    'adapted_curricula' => $opportunity->adapted_curricula,
                    'teaching_modality' => $opportunity->teaching_modality,
                    'future_job' => $opportunity->future_job,
                    'multimedia_center' => $opportunity->multimedia_center,
                    'choice_partnership' => $opportunity->choice_partnership,
                    'opportunityable_id' => $opportunityEnglish->id,
                    'opportunityable_type' => OpportunityEnglish::class,
                ]);
            }
        }

        foreach ($opportunityFrenches as $key => $opportunity) {
            $existingOpportunityFrench = Opportunity::where('opportunityable_type', '=', OpportunityFrench::class)->first();

            if (!$existingOpportunityFrench) {
                $opportunityFrench = new OpportunityFrench();
                $opportunityFrench->save();

                Opportunity::create([
                    'opportunity_information' => $opportunity->opportunity_information,
                    'scholarship' => $opportunity->scholarship,
                    'adapted_curricula' => $opportunity->adapted_curricula,
                    'teaching_modality' => $opportunity->teaching_modality,
                    'future_job' => $opportunity->future_job,
                    'multimedia_center' => $opportunity->multimedia_center,
                    'choice_partnership' => $opportunity->choice_partnership,
                    'opportunityable_id' => $opportunityFrench->id,
                    'opportunityable_type' => OpportunityFrench::class,
                ]);
            }
        }
    }
}
