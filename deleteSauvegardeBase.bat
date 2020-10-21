SetLocal EnableDelayedExpansion
cd U:\59011-95-14\SauvegardeBDD
for /d %%i in (*) do (
    cd U:\59011-95-14\SauvegardeBDD\%%i
    for %%j in (*)do(
        del U:\59011-95-14\SauvegardeBDD\%%i\%%j
    )
rmdir /Q U:\59011-95-14\SauvegardeBDD\%%i
cd U:\59011-95-14\SauvegardeBDD
)

EndLocal