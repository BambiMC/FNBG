"use client"
import React from 'react';
import { useLanguageData } from '@/data/languageLoader';

const Homepage: React.FC = () => {
  const data = useLanguageData();

  return (
    <main className='p-20 mt-20'>
      {data && (
        <div className="flex justify-around items-center mr-32">
          <img className="" src="/W1.png" alt="picture of Fabian Berger" width={600} height={24} />

          <p>Email: {data['welcomeText']}</p>

        </div>

      )}
    </main >
  );
};

export default Homepage;