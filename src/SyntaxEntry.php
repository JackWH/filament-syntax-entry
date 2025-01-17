<?php

namespace Parallax\FilamentSyntaxEntry;

use Closure;
use Filament\Infolists\Components\Concerns\HasAffixes;
use Filament\Infolists\Components\Contracts\HasAffixActions;
use Filament\Infolists\Components\Entry;

class SyntaxEntry extends Entry implements HasAffixActions
{
    use HasAffixes;

    protected string $view = 'filament-syntax-entry::syntax-entry';

    protected string | Closure | null $language = null;

    protected string | Closure | null $theme = 'filament';

    protected string | Closure | null $darkModeTheme = 'filament-dark';

    public function language(string | Closure $language): static
    {
        $this->language = $language;

        return $this;
    }

    public function getLanguage(): string
    {
        return $this->evaluate($this->language);
    }

    public function theme(string | Closure $theme): static
    {
        $this->theme = $theme;

        return $this;
    }

    public function getTheme(): string
    {
        return $this->evaluate($this->theme);
    }

    public function darkModeTheme(string | Closure $darkModeTheme): static
    {
        $this->darkModeTheme = $darkModeTheme;

        return $this;
    }

    public function getDarkModeTheme(): string | null
    {
        return $this->evaluate($this->darkModeTheme);
    }
}
