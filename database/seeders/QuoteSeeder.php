<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "content" => "If you're changing the world, you're working on important things. You're excited to get up in the morning",
                "author" => "Larry Page"
            ],
            [
                "content" => "The biggest room in the world is room for improvement",
                "author" => "Helmut Schmidt"
            ],
            [
                "content" => "Whether you think you can or you think you can't, you are right.",
                "author" => "Henry Ford"
            ],
            [
                "content" => "There's power in looking silly and not caring that you do.",
                "author" => "Amy Poehler"
            ],
            [
                "content" => "In times of change, learners inherit the earth, while the learned find themselves beautifully equipped to deal with a world that no longer exists.",
                "author" => "Eric Hoffer"
            ],
            [
                "content" => "The one thing that you have that nobody else has is you. Your voice, your mind, your story, your vision. So write and draw and build and play and dance and live as only you can.",
                "author" => "Neil Gaiman"
            ],
            [
                "content" => "Success is not the key to happiness. Happiness is the key to success. If you love what you are doing, you will be successful.",
                "author" => "Albert Schweitzer"
            ],
            [
                "content" => "The least of things with a meaning is worth more in life than the greatest of things without it.",
                "author" => "Carl Jung"
            ],
            [
                "content" => "You can stand tall without standing on someone. You can be a victor without having victims.",
                "author" => "Harriet Woods"
            ],
            [
                "content" => "Some people thrive on huge, dramatic change. Some people prefer the slow and steady route. Do what's right for you.",
                "author" => "Julie Morgenstern"
            ],
            [
                "content" => "Wisdom, compassion, and courage are the three universally recognized moral qualities of men.",
                "author" => "Confucius"
            ],
            [
                "content" => "With age comes wisdom and a high sex drive. And the wisdom to enjoy it.",
                "author" => "Amber Valletta"
            ],
            [
                "content" => "Make it your habit not to be critical about small things.",
                "author" => "Edward Everett Hale"
            ],
            [
                "content" => "Friendship increases in visiting friends, but in visiting them seldom.",
                "author" => "Francis Bacon"
            ],
            [
                "content" => "You can't blame gravity for falling in love.",
                "author" => "Albert Einstein"
            ],
            [
                "content" => "Take up one idea. Make that one idea your life - think of it, dream of it, live on that idea. Let the brain, muscles, nerves, every part of your body, be full of that idea, and just leave every other idea alone. This is the way to success.",
                "author" => "Swami Vivekananda"
            ],
            [
                "content" => "There is some self-interest behind every friendship. There is no friendship without self-interests. This is a bitter truth.",
                "author" => "Chanakya"
            ],
            [
                "content" => "Two persons cannot long be friends if they cannot forgive each other's little failings.",
                "author" => "Jean de La Bruyère"
            ],
            [
                "content" => "Friendship, like credit, is highest when it is not used.",
                "author" => "Elbert Hubbard"
            ],
            [
                "content" => "To be wronged is nothing unless you continue to remember it.",
                "author" => "Confucius"
            ],
            [
                "content" => "Truth is powerful and it prevails.",
                "author" => "Sojourner Truth"
            ],
            [
                "content" => "The things that one most wants to do are the things that are probably most worth doing.",
                "author" => "Winifred Holtby"
            ],
            [
                "content" => "Silence is the sleep that nourishes wisdom.",
                "author" => "Francis Bacon"
            ],
            [
                "content" => "Friends are those rare people who ask how we are and then wait to hear the answer.",
                "author" => "Ed Cunningham"
            ],
            [
                "content" => "He who controls others may be powerful, but he who has mastered himself is mightier still.",
                "author" => "Laozi"
            ],
            [
                "content" => "Don't talk about what you have done or what you are going to do.",
                "author" => "Thomas Jefferson"
            ],
            [
                "content" => "When a thing is done, it's done. Don't look back. Look forward to your next objective.",
                "author" => "George Marshall"
            ],
            [
                "content" => "All our knowledge has its origins in our perceptions.",
                "author" => "Leonardo da Vinci"
            ],
            [
                "content" => "Fears are nothing more than a state of mind.",
                "author" => "Napoleon Hill"
            ],
            [
                "content" => "Life is the only real counselor; wisdom unfiltered through personal experience does not become a part of the moral tissue.",
                "author" => "Edith Wharton"
            ],
            [
                "content" => "Be here now. Be someplace else later. Is that so complicated?",
                "author" => "David Bader"
            ],
            [
                "content" => "Just trust yourself, then you will know how to live.",
                "author" => "Johann Wolfgang von Goethe"
            ],
            [
                "content" => "He who knows others is wise. He who knows himself is enlightened.",
                "author" => "Laozi"
            ],
            [
                "content" => "Nothing will work unless you do.",
                "author" => "Maya Angelou"
            ],
            [
                "content" => "Thought is the blossom; language the bud; action the fruit behind it.",
                "author" => "Ralph Waldo Emerson"
            ],
            [
                "content" => "Argue for your limitations, and sure enough they're yours.",
                "author" => "Richard Bach"
            ],
            [
                "content" => "Good judgment comes from experience, and a lot of that comes from bad judgment.",
                "author" => "Will Rogers"
            ],
            [
                "content" => "He that is giddy thinks the world turns round.",
                "author" => "William Shakespeare"
            ],
            [
                "content" => "The greater our knowledge increases the more our ignorance unfolds.",
                "author" => "John F. Kennedy"
            ],
            [
                "content" => "Friendship is a very taxing and arduous form of leisure activity.",
                "author" => "Mortimer J. Adler"
            ],
        ];
        DB::table('quotes_table')->insert($data);
    }
}
