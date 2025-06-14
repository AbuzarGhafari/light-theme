import React from 'react';
import { PageProps } from '@/types';

interface Props extends PageProps {
  theme: string;
}

export default function ThemeTest({ theme }: Props) {
  return (
    <div className="p-6 text-center">
      <h1 className="text-3xl font-bold text-blue-600">Theme: {theme}</h1>
      <p>This component is served from the <strong>{theme}</strong> theme package!</p>
    </div>
  );
}
